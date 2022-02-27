<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AddEAV extends Command
{
    /**
     * Constant
     */
    public const ENTITY = '';
    public const ATTRIBUTE = 'rinvex.attributes.attribute';
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'eav:init {--r|reset : Reset.} {--a|add : Add.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize for EAV model rinvex';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->registerEntities(config('entity.entities'));

        $this->createAttribute(config('entity.attributes'));

        echo "EAV Model Initialize Complete";
    }

    public function registerEntities($entities) {
        foreach($entities as $entity) {
            app('rinvex.attributes.entities')->push($entity);
        }
    }

    public function createAttribute($attributes) {
        $if_add = $this->option('add');
        if($this->option('reset')) {
            app('rinvex.attributes.attribute')->query()->delete();
        }

        foreach($attributes as $attribute) {
            if($if_add && app('rinvex.attributes.attribute')->where('slug', $attribute['slug'])->exists()){
            } else {
                app('rinvex.attributes.attribute')->create($attribute);
            }
        }
    }
}

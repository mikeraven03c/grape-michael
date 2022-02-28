<?php

namespace App\Traits;

use App\Events\EntityWasDeleted;
use Rinvex\Attributes\Events\EntityWasSaved;
use Rinvex\Attributes\Scopes\EagerLoadScope;
use Rinvex\Attributes\Traits\Attributable as RinvexAttributable;

trait Attributable {
  use RinvexAttributable;

  public static function bootAttributable()
  {
      static::addGlobalScope(new EagerLoadScope());
      static::saved(EntityWasSaved::class.'@handle');
      static::deleted(EntityWasDeleted::class.'@handle');
  }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;

class FormsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('addForm', function ($option) {



            return "<?php echo '<form method={$option}[method]>
                                    <input type=text value=123>
                                </form>'; ?>";
        });
    }
}

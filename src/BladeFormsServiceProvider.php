<?php

namespace DistortedFusion\BladeForms;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;

class BladeFormsServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        if (! defined('DF_BF_PATH')) {
            define('DF_BF_PATH', realpath(__DIR__.'/../'));
        }

        $this->mergeConfigFrom(DF_BF_PATH.'/config/blade-forms.php', 'blade-forms');
    }

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->offerPublishing();
        $this->registerResources();
        $this->configureBladeComponents();
    }

    private function offerPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                DF_BF_PATH.'/config/blade-forms.php' => config_path('blade-forms.php'),
            ], 'blade-forms-config');

            $this->publishes([
                DF_BF_PATH.'/resources/views' => resource_path('views/vendor/blade-forms'),
            ], 'blade-forms-views');
        }
    }

    private function registerResources(): void
    {
        $this->loadViewsFrom(DF_BF_PATH.'/resources/views', 'blade-forms');
    }

    private function configureBladeComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {
            foreach (config('blade-forms.components', []) as $alias => $component) {
                $blade->component($component, $alias);
            }
        });
    }
}

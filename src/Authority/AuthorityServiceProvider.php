<?php namespace Authority;

use Authority\Repo\RepoServiceProvider;
use Authority\Service\Form\FormServiceProvider;
use Illuminate\Support\ServiceProvider;

class AuthorityServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('base/authority', 'base/authority');
        include __DIR__ . '/../routes.php';
        include __DIR__ . '/../filters.php';
        include __DIR__ . '/../observables.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $repoProvider = new RepoServiceProvider($this->app);
        $repoProvider->register();

        $formServiceProvider = new FormServiceProvider($this->app);
        $formServiceProvider->register();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}
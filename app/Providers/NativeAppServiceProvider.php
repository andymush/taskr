<?php

namespace App\Providers;

use Native\Desktop\Facades\Window;
use Native\Desktop\Contracts\ProvidesPhpIni;

class NativeAppServiceProvider implements ProvidesPhpIni
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        Window::open()
            ->route('tasks')
            ->width(500)
            ->height(700)
            ->resizable(false)
            ->titleBarHidden()      // removes OS title bar
            ->trafficLightsHidden() // macOS: hides the red/yellow/green dots
            ->alwaysOnTop();        // keeps it above other windows 
    }

    /**
     * Return an array of php.ini directives to be set.
     */
    public function phpIni(): array
    {
        return [
        ];
    }
}

<?php
    $cesas_forums = DB::table('users')->count();
    $imid_users = DB::connection('mysql_imid')->table('users')->count();
    $lupus_users = DB::connection('mysql_lupus')->table('users')->count();
    $scleroderma_users = DB::connection('mysql_scleroderma')->table('users')->count();
?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Register') }}
        </h2>
    </x-slot>

    Dave Loughhead

    {{--<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>--}}

    <table width="50%" style="border:1px solid gray">
        <tr><td>Website</td><td>User Count</td></tr>
        <tr><td>IMID Forum</td><td></td></tr>
        <tr><td>Lupus Forum</td><td></td></tr>
        <tr><td>Scleroderma Forum</td><td></td></tr>
    </div>

</x-app-layout>

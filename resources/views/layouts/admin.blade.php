<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">

    <!-- app js values -->
    <script type="application/javascript">
        var LSK_APP = {};
        LSK_APP.APP_URL = '{{env('APP_URL')}}';
    </script>
</head>
<body>
  <div id="admin">
    <v-app dark id="inspire">
      <v-navigation-drawer
        clipped
        fixed
        app>
        <v-list dense>
          <v-list-tile :exact="false" :to="{ name: 'dashboard' }">
            <v-list-tile-action>
              <v-icon>dashboard</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>Dashboard</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>

          <v-list-tile :exact="false">
            <v-list-tile-action>
              <v-icon>person</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>User</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>

          <v-list-tile :exact="false">
            <v-list-tile-action>
              <v-icon>cloud_circle</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>Files</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
        </v-list>
      </v-navigation-drawer>

      <v-toolbar app fixed clipped-left>
        <v-toolbar-side-icon></v-toolbar-side-icon>
        <v-toolbar-title>{{config('app.name')}}</v-toolbar-title>
      </v-toolbar>

      <v-content>
        <transition >
          <router-view></router-view>
        </transition>
      </v-content>
      <v-footer app fixed>
        <span>&copy; 2019</span>
      </v-footer>
    </v-app>
  </div>

<script src="{{ asset('js/manifest.js') }}"></script>
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
<template>
  <v-app dark >
    <v-navigation-drawer
      clipped
      fixed
      app>
      <v-list dense>
        <v-list-tile :exact="false">
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
      <v-toolbar-title>ASHKAN90 LARAVEL-@VUE CLI</v-toolbar-title>
    </v-toolbar>

    <v-content>
      <transition>
        <router-view></router-view>
      </transition>
    </v-content>
    <v-footer app fixed>
      <span>&copy; 2019</span>
    </v-footer>
  </v-app>
</template>

<script>
    export default {
        name: 'admin',
        data() {
            return {
                //
            }
        },
        

    }
</script>

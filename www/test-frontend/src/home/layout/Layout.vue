<template>
  <div class="main-content bg-default">
    <base-nav
      v-model="showMenu"
      :transparent="true"
      menu-classes="justify-content-end"
      class="navbar-horizontal navbar-main navbar-top navbar-dark"
      expand="lg"
    >


      <template>
        <div class="navbar-collapse-header">
          <b-row>
            <b-col cols="6" class="collapse-brand">
              <router-link to="/">
                <img src="img/brand/green.png">
              </router-link>
            </b-col>
            <b-col cols="6" class="collapse-close">
              <button type="button" class="navbar-toggler" @click="showMenu = false">
                <span></span>
                <span></span>
              </button>
            </b-col>
          </b-row>
        </div>
        <b-navbar-nav  class="align-items-lg-center ml-lg-auto">
          <b-nav-item to="/" >
            <i class="ni ni-planet"></i>
            <span class="nav-link-inner--text">Customers</span>
          </b-nav-item>

        </b-navbar-nav>
      </template>
    </base-nav>

    <div class="main-content">
      <img src="../../assets/releaf-logo.png" class="m-3" alt="" width="80" height="65">

      <zoom-center-transition
        :duration="pageTransitionDuration"
        mode="out-in"
      >
        <router-view></router-view>
      </zoom-center-transition>
    </div>
  </div>
</template>

<style lang="scss">
  @import "./layout.scss";
</style>

<script src="./layout.js"></script>

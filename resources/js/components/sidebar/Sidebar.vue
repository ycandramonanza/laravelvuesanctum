<template>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand text-center mt-3">
        <router-link to="/home">
           <h4 class="brand-text font-weight-light">Laravuespa</h4>
        </router-link>
    </div>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Yegi Candra Monanza</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <router-link to="/home" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home</p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/product" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Product</p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/create" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Product</p>
                            </router-link>
                        </li>
                         <li class="nav-item list-group-item text-dark text-decoration-none" style="cursor:pointer" @click="logout">
                             
                                <i class="far fa-circle nav-icon"></i>
                                Logout
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
</template>
<script>
export default {
        data(){
            return {
                loggedIn: null,
                token : null
            }
        },
        methods: {
            getLoggedin(){
                this.loggedIn = localStorage.getItem("loggedIn")
                this.token = localStorage.getItem("token")
            },

            logout() {
                axios.get('/api/logoutfix')
                .then(() => {
                    //remove localStorage
                    localStorage.removeItem("loggedIn") 
                    localStorage.removeItem("token")      


                    //redirect
                    return this.$router.push({ name: 'login' })
                })
            }
        },
        watch: {
            $route: {
                immediate: true,
                handler(){
                    this.getLoggedin()
                }
            }
        },
    }
</script>
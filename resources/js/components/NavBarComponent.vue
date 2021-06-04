<template>
<nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <!-- sidebar-brand  -->
                <div class="sidebar-item sidebar-brand">
                    <a href="#">CENDYN</a>
                </div>
                <!-- sidebar-header  -->
                <!-- sidebar-menu  -->
                <div class=" sidebar-item sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Main Menu</span>
                        </li>
                        <li class="">
                            <a href="#">
                                <i class="fa fa-arrow-alt-circle-right"></i>
                                <span class="menu-text"><router-link to="/persons" class="nav-link">Person Collection</router-link></span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
        </nav>
</template>

<script>
    export default {
        name:'navbar',
    }
</script>


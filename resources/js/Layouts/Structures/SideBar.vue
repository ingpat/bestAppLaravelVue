<script setup>
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from "@inertiajs/vue3";
</script> 

<template>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        

    
        

        <div class="sidebar">

            <div class="user-panel mt-3 pb-6 mb-3 d-flex">
                <div class="image">
                    <img src="~admin-lte/dist/img/Logo_valG.png" class="img-circle elevation-8">
                </div>
                <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                           <h1>Dashboard</h1> 
                        </ResponsiveNavLink>
            </div>



            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                 
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Widgets
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Layout Options
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">6</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Top Navigation</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Top Navigation + Sidebar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/boxed.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Boxed</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fixed Sidebar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fixed Sidebar <small>+ Custom Area</small></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fixed Navbar</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/fixed-footer.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fixed Footer</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Collapsed Sidebar</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Produits
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <Link href="products" class="nav-link"
                                    :class="{ 'active': $page.component == 'Products/Index' }">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Produits</p>
                                </Link>
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link"                                
                                    :href="route('graphicproduct')" :active="route().current('graphicproduct')">
                                    Graphic
                                </Link>
                            </li>
                            <li class="nav-item">
                                <!-- <Link :href="route('register')" class="nav-link"> -->
                                <Link href="types" class="nav-link" :class="{ 'active': $page.component == 'Types/Index' }">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Types</p>
                                </Link>
                            </li>
                            <li class="nav-item">
                                <!-- <Link :href="route('register')" class="nav-link"> -->
                                <Link href="unites" class="nav-link"
                                    :class="{ 'active': $page.component == 'Ubites/Index' }">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Unites</p>
                                </Link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                Transactions
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <Link :href="achats" class="nav-link"
                                :class="{ 'active': $page.component == 'Achats/Index' }">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Achats</p>
                                </Link>
                            </li>
                            <li class="nav-item">
                                <Link :href="ventes" class="nav-link"
                                :class="{ 'active': $page.component == 'Ventes/Index' }">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Ventes</p>
                                </Link>
                            </li>
                            <li class="nav-item">
                                <Link :href="proformats" class="nav-link"
                                :class="{ 'active': $page.component == 'Proformats/Index' }">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Proformats</p>
                                </Link>
                            </li>
                            <li class="nav-item">
                                <Link :href="transferts" class="nav-link"
                                :class="{ 'active': $page.component == 'Transferts/Index' }">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Transferts</p>
                                </Link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Personnel
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <Link href="employees" class="nav-link"
                                    :class="{ 'active': $page.component == 'Employees/Index' }">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Employees</p>
                                </Link>
                            </li>
                            <li class="nav-item">
                                <Link href="users" class="nav-link"
                                :class="{ 'active': $page.component == 'Users/Index' }">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Users</p>
                                </Link>
                            </li>
                            <li class="nav-item">>
                                <!-- <Link :href="route('register')" class="nav-link"> -->
                                <Link href="roles" class="nav-link" :class="{ 'active': $page.component == 'Roles/Index' }">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Roles</p>
                                </Link>
                            </li>
                            <li class="nav-item">>
                                <!-- <Link :href="route('register')" class="nav-link"> -->
                                <NavLink :href="departments" class="nav-link" :class="{ 'active': $page.component == 'Departments/Index' }">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Departments</p>
                                </NavLink>:
                            </li>
                            <li class="nav-item">>
                                <!-- <Link :href="route('register')" class="nav-link"> -->
                                <Link href="succursales" class="nav-link"
                                    :class="{ 'active': $page.component == 'Succursales/Index' }">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Succursales</p>
                                </Link>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <Link href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Stocks
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        </Link>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <Link href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>StkSucc_I</p>
                                </Link>
                            </li>
                            <li class="nav-item">
                                <Link href="pages/tables/jsgrid.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>StkSucc_II</p>
                                </Link>
                            </li>
                            <li class="nav-item">
                                <Link href="pages/tables/jsgrid.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>StkSucc_III</p>
                                </Link>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item">
                                <Link href="showLogin" class="nav-link"
                                :class="{ 'active': $page.component == 'Users/LoginForm' }">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Login</p>
                                </Link>
                            </li>
                            <li class="nav-item">
                                
                                <NavLink :href="route('departments.index')" 
                                :class="{ 'active': $page.component == 'Departments/Index' }">
                                <i class="far fa-circle nav-icon"></i><p>Departement</p>
                                </NavLink>
                            </li>

                            <li class="nav-item">
                                
                                <NavLink :href="route('employees.index')" 
                                :class="{ 'active': $page.component == 'Departments/Index' }">
                                <i class="far fa-circle nav-icon"></i><p>Employees</p>
                                </NavLink>
                            </li>
                            <!-- <li class="nav-item">
                                
                                <NavLink :href="route('pagePrint')" 
                                :class="{ 'active': $page.component == 'Employees/PagePrint' }">
                                <i class="far fa-circle nav-icon"></i><p>Print</p>
                                </NavLink>
                            </li> -->
                            <li class="nav-item">                                
                                <NavLink :href="route('graphic')" 
                                :class="{ 'active': $page.component == 'graphic' }">
                                <i class="far fa-circle nav-icon"></i><p>Graphic</p>
                                </NavLink>
                            </li>
                            <li class="nav-item">                                
                                <NavLink :href="route('reports')" 
                                :class="{ 'active': $page.component == 'reports' }">
                                <i class="far fa-circle nav-icon"></i><p>Reports</p>
                                </NavLink>
                            </li>

                </ul>
            </nav>

        </div>

    </aside>
</template>


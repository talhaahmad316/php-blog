 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <div class="brand-link">
   <a href="../index.php" class="brand-link">
      <img src="<?= url('assets') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">My-Blog</span>
    </a>
     
   </div>
   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="<?= url('assets') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block">Muhammad Shahroz</a>
       </div>
     </div>

     <!-- SidebarSearch Form -->
     <div class="form-inline">
       <div class="input-group" data-widget="sidebar-search">
         <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
         <div class="input-group-append">
           <button class="btn btn-sidebar">
             <i class="fas fa-search fa-fw"></i>
           </button>
         </div>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item">
           <a href="#" class="nav-link active">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>
               Accounts
               <i class="right fas fa-angle-left"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="auth/register.php" class="nav-link ">
                 <!-- <i class="fa-solid fa-user-plus"></i> -->
                 <p>Register</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="auth/login.php" class="nav-link">
                 <!-- <i class="fa-solid fa-right-to-bracket"></i> -->
                 <p>Login</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="users/list_users.php" class="nav-link">
                 <!-- <i class="nav-icon fa fa-users"></i> -->
                 <p>Registered_Users</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-copy"></i>
             <p>
               Categories
               <i class="fas fa-angle-left right"></i>
               <span class="badge badge-info right">2</span>
             </p>
           </a>
           <ul class="nav nav-treeview">
            <li class="nav-item">
               <a href="<?= url('admin/category') ?>" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>All Categories</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= url('admin/category/create.php') ?>" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Create Category</p>
               </a>
             </li>
             
           </ul>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-copy"></i>
             <p>
               Sub Categories
               <i class="fas fa-angle-left right"></i>
               <span class="badge badge-info right">2</span>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="pages/layout/top-nav.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Add Sub Categories</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>View Sub Categories</p>
               </a>
             </li>
           </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>
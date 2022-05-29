<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  {{-- @push('head') --}}
  <!-- Styles -->
  <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Scripts -->

  {{-- @endpush --}}

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
</head>
<div class="s-layout">
    <!-- Sidebar -->
    <div class="s-layout__sidebar">
      <a class="s-sidebar__trigger" href="#0">
         <i class="fa fa-bars"></i>
      </a>

      <nav class="s-sidebar__nav">
         <ul>
            <li>
               <a class="s-sidebar__nav-link" href="#">
                  <i class="fa fa-home"></i><em>Home</em>
               </a>
            </li>
            <li>
               <a class="s-sidebar__nav-link" href="{{ url('client') }}">
                 <i class="fa fa-users"></i><em>Les Clients </em>
               </a>
            </li>
            <li>
               <a class="s-sidebar__nav-link" href="{{ url('text') }}">
                  <i class="fa fa-file-text"></i><em>Texte réglementaire </em>
               </a>
            </li>

            <li>
                <a class="s-sidebar__nav-link" href="{{ url('alert') }}">
                   <i class="fa fa-bell"></i><em>Les Alerte  </em>
                </a>
             </li>

             <li>
                <a class="s-sidebar__nav-link" href="#0">
                   <i class="fa fa-credit-card-alt"></i><em>Abonnement  </em>
                </a>
             </li>



             <li>
                <a class="s-sidebar__nav-link" href="#0">
                   <i class="fa fa-fa fa-shield"></i><em>Rôle & utilisateur   </em>
                </a>
             </li>



             <li>
                <a class="s-sidebar__nav-link" href="#0">
                   <i class="fa fa-cogs"></i><em>Configuration   </em>
                </a>
             </li>


         </ul>
      </nav>
    </div>

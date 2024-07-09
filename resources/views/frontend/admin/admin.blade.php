<x-app-layout>
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
           >
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Admin Panel</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                 
                    <li class="float-end">Welcome {{ Auth::user()->name }}</li>
                </ol>
            </div>
        </nav>
    </div>



    {{ dump($quotes) }}
</x-app-layout>
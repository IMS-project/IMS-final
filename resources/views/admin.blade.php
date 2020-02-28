@section('content')
@extends('layouts.app')

<div class="row h-100 w-100" >

    <!-- Sidebar -->
    <div class="col-md-2 col-sm-2 col-lg-2 sidebar" style="margin: 4px">
        <div class="sidebar-sticky">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <a class="nav-link" href="/users/create">
                <strong>Add university</strong>
                </a>
            </li>

            <li class="list-group-item">
                <a class="nav-link" href="/users/list_of_students">
                <strong>Add organization</strong></a>
            </li>

            <li class="list-group-item">
                <a class="nav-link" href="/questions">
                <strong>list oforganizations</strong></a>
            </li>

            <li class="list-group-item">
                <a class="nav-link" href="/categories">
                <strong>list of university</strong></a>
            </li>

            <li class="list-group-item">
                <a class="nav-link" href="#">
                <strong>updates</strong></a>
            </li>
          </ul>
        </div>

    </div>
    {{-- end of sidebar --}}

    <div class="col-9">

      <div class="container-fluid">

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-4 col-sm-9 mb-4">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5"><h5> Admins!</h5></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="/users/list_of_admins">
                <span class="float-left"><strong>View Details</strong></span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-4 col-sm-9 mb-4">
            <div class="card text-white bg-secondary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><h5> Students!</h5></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="/users/list_of_students">
                <span class="float-left"><strong>View Details</strong></span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-4 col-sm-9 mb-4">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><h5> Questions!</h5></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="/users/list_of_questions">
                <span class="float-left"><strong>View Details</strong></span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

        </div>
        {{-- end of cards --}}

      </div>
      <!-- /.container-fluid -->

        <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    List of active Admins
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Creation Date</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                        </table>
                    </div>
                </div>

            <div class="card-footer small text-muted">

            </div>
        </div>

      </div>

    </div>
    <!-- end of content-->

  </div>


@endsection

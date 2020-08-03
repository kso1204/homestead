@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Paper List</h2>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Paper Number</th>
                    <th scope="col">Title</th>
                    <th scope="col">Authors</th>
                    <th scope="col">File of Paper</th>
                    <th scope="col">Submission Date&Time</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Jacob</td>
                    <td>Jacob</td>
                    <td>Jacob</td>
                    <td>Jacob</td>
                  </tr>
                </tbody>
              </table>
              
              <a class="btn btn-link" href="{{ route('papers.create') }}">
                  {{ __('Paper Submission') }}
              </a>
        </div>
    </div>
</div>
@endsection

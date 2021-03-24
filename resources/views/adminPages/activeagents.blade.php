@section('title', 'Admin- Active Agents')
@section('location', 'Active Agents')
@extends('dashboard.admin')

@section('main_body')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Agent Id</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Registered on</th>
                        <th>Activation on</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>EN-03-F-EKTE-28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>2011/04/25</td>
                        <td>2011/04/25</td>
                        <td>
                            <button type="button" class="btn btn-outline-danger">
                                <i class="fas fa-fw fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>EN-03-F-EKTE-28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>2011/04/25</td>
                        <td>2011/04/25</td>
                        <td>
                            <button type="button" class="btn btn-outline-danger">De-activate</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>EN-03-F-EKTE-28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>2011/04/25</td>
                        <td>2011/04/25</td>
                        <td>
                            <button type="button" class="btn btn-outline-danger">De-activate</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>EN-03-F-EKTE-28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>2011/04/25</td>
                        <td>2011/04/25</td>
                        <td>
                            <button type="button" class="btn btn-outline-danger">De-activate</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>EN-03-F-EKTE-28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>2011/04/25</td>
                        <td>2011/04/25</td>
                        <td>
                            <button type="button" class="btn btn-outline-danger">De-activate</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>EN-03-F-EKTE-28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>2011/04/25</td>
                        <td>2011/04/25</td>
                        <td>
                            <button type="button" class="btn btn-outline-danger">De-activate</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>EN-03-F-EKTE-28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>2011/04/25</td>
                        <td>2011/04/25</td>
                        <td>
                            <button type="button" class="btn btn-outline-danger">De-activate</button>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="7" class="text-center">
                            Total Active Agents
                        </th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
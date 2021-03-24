@section('title', 'Admin - Total Beneficiaries')
@section('location', 'Total Beneficiaries')
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
                        <th>Agents Id</th>
                        <th>Agents ref</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Registered on</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Eket Ekantie Conte</td>
                        <td>EN-03-F-EKTE-28-81-123</td>
                        <td>28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>28-81-123</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>Eket Ekantie Conte</td>
                        <td>EN-03-F-EKTE-28-81-123</td>
                        <td>28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>28-81-123</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <td>Eket Ekantie Conte</td>
                        <td>EN-03-F-EKTE-28-81-123</td>
                        <td>28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>28-81-123</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>Eket Ekantie Conte</td>
                        <td>EN-03-F-EKTE-28-81-123</td>
                        <td>28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>28-81-123</td>
                        <td>Active</td>
                    </tr>
                    <tr>
                        <th colspan="7" class="text-center">
                            Total Agents
                        </th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
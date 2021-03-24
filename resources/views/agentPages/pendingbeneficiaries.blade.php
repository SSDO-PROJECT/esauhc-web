@section('title', 'Agent - Pending Beneficiaries')
@section('location', 'Pending Beneficiaries')
@extends('dashboard.agents')

@section('main_body')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Beneficiary ref</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Registered on</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Airi Satou Airi</td>
                        <td>28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>2008/11/28</td>
                        <td>
                            <button type="button" class="btn btn-success">Activate Beneficiary</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Airi Satou Airi</td>
                        <td>28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>2008/11/28</td>
                        <td>
                            <button type="button" class="btn btn-success">Activate Beneficiary</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Airi Satou Airi</td>
                        <td>28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>2008/11/28</td>
                        <td>
                            <button type="button" class="btn btn-success">Activate Beneficiary</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Airi Satou Airi</td>
                        <td>28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>2008/11/28</td>
                        <td>
                            <button type="button" class="btn btn-success">Activate Beneficiary</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Airi Satou Airi</td>
                        <td>28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>2008/11/28</td>
                        <td>
                            <button type="button" class="btn btn-success">Activate Beneficiary</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Airi Satou Airi</td>
                        <td>28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>2008/11/28</td>
                        <td>
                            <button type="button" class="btn btn-success">Activate Beneficiary</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Airi Satou Airi</td>
                        <td>28-81-123</td>
                        <td>234-904-500-4300</td>
                        <td>Beneficiary@ben.com</td>
                        <td>2008/11/28</td>
                        <td>
                            <button type="button" class="btn btn-success">Activate Beneficiary</button>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="7" class="text-center">
                            Pending Beneficiaries for this User
                        </th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
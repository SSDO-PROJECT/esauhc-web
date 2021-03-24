@section('title', 'Agent - Add Single Beneficiaries')
@section('location', 'Add Single Beneficiaries')
@extends('dashboard.agents')

@section('main_body')


        <form method="POST" action="{{route('agent_addben')}}">
            @csrf
            <hr style="height:1px; border-top:3px dashed #bbb; margin: 30px;">
            <div class="row">
                <!-- Plan Type Field -->
                <div class="col-xl-6 col-md-6 mb-4 form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>1. Plan Type:</b></p>
                    <div class="col-sm-12">
                        <select name="plan_type" class="form-control">
                            <option value="">Select</option>
                            <option value="SSPH">SSPH</option>
                            <option value="BMPHS">BMPHS</option>
                        </select>
                    </div>
                </div>
                <!-- Beneficiary National Id Nin Field %%%%%-->
                <div class=" col-xl-6 col-md-6 mb-4 form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>2. Beneficiary National ID (NIN):</b><span style="color:red"> *</span></p>
                    <div class="col-sm-12">
                        <input type="text" name="beneficiary_national_id_nin" class="form-control" required>
                    </div>
                </div>
            </div>

            <hr style="height:1px; border-top:3px dashed #bbb; margin: 30px;">
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4  form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>3. Beneficiary First Name:</b><span style="color:red"> *</span></p>
                    <div class="col-sm-12">
                        <input type="text" name="beneficiary_name" class="form-control" required>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4  form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>Beneficiary Middle Name:</b><span style="color:red"> *</span></p>
                    <div class="col-sm-12">
                        <input type="text" name="beneficiary_name" class="form-control" required>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4  form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>Beneficiary Last Name:</b><span style="color:red"> *</span></p>
                    <div class="col-sm-12">
                        <input type="text" name="beneficiary_name" class="form-control" required>
                    </div>
                </div>
            </div>

            <hr style="height:1px; border-top:3px dashed #bbb; margin: 30px;">
            <div class="row">
                <!-- Beneficiary Dob Field -->
                <div class="col-xl-6 col-md-6 mb-4 form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>4. Beneficiary Date of Birth:</b><span style="color:red"> *</span></p>
                    <div class="col-sm-12">
                        <input type="date" name="beneficiary_dob" class="form-control" requied>
                    </div>
                </div>
                <!-- Beneficiary Sex Field -->
                <div class="col-xl-6 col-md-6 mb-4 form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>5. Beneficiary Sex:</b><span style="color:red"> *</span></p>
                    <div class="col-sm-12">
                        <select name="beneficiary_sex" class="form-control" required>
                            <option value="">Select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
            </div>

            <hr style="height:1px; border-top:3px dashed #bbb; margin: 30px;">
            <div class="row">
                <!-- Beneficiary Address Field -->
                <div class="col-xl-4 col-md-6 mb-4 form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>6. Beneficiary Address:</b></p>
                    <div class="col-sm-12">
                        <input type="text" name="beneficiary_address" class="form-control">
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-4 form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>7. Beneficiary LGA:</b><span style="color:red"> *</span></p>
                    <div class="col-sm-12">
                        <select name="beneficiary_lga" class="form-control" required>
                            <option value="">Select</option>
                            <option value="Aninri">Aninri</option>
                            <option value="Enugu East">Enugu East</option>
                            <option value="Igbo Etiti">Igbo Etiti</option>
                            <option value="Igbo Eze North">Igbo Eze North</option>
                            <option value="Igbo Eze South">Igbo Eze South</option>
                            <option value="Isi Uzo">Isi Uzo</option>
                            <option value="Nkanu East">Nkanu East</option>
                            <option value="Nkanu West">Nkanu West</option>
                            <option value="Nssuka">Nssuka</option>
                            <option value="Oji River">Oji River</option>
                            <option value="Udenu">Udenu</option>
                            <option value="Udi">Udi</option>
                            <option value="Uzo">Uzo</option>
                            <option value="Uwani">Uwani</option>
                        </select>
                    </div>
                </div>
                <!-- Beneficiary Ward Field -->
                <div class="col-xl-4 col-md-6 mb-4 form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>8. Beneficiary Ward:</b></p>
                    <div class="col-sm-12">
                        <input type="text" name="beneficiary_ward" class="form-control">
                    </div>
                </div>
            </div>

            <hr style="height:1px; border-top:3px dashed #bbb; margin: 30px;">
            <div class="row">
                <!-- Marital Status Field -->
                <div class="col-xl-6 col-md-6 mb-4 form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>10. Marital Status:</b></p>
                    <div class="col-sm-12">
                        <select name="marital_status" class="form-control">
                            <option value="">Select</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                <!-- Employment Status Field -->
                <div class="col-xl-6 col-md-6 mb-4 form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>11. Employment Status:</b></p>
                    <div class="col-sm-12">
                        <select name="employment_status" class="form-control">
                            <option value="">Select</option>
                            <option value="Employed">Employed</option>
                            <option value="Unemployed">Unemployed</option>
                            <option value="Full-time Student">Full-time Student</option>
                            <option value="Part-time Student">Part-time Student</option>
                        </select>
                    </div>
                </div>
            </div>

            <hr style="height:1px; border-top:3px dashed #bbb; margin: 30px;">
            <div class="row">
                <!-- Beneficiary Phone Pry Field -->
                <div class="col-xl-4 col-md-6 mb-4 form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>15. Beneficiary Phone (Primary):</b><span style="color:red"> *</span></p>
                    <div class="col-sm-12">
                        <input type="number" name="beneficiary_phone_pry" class="form-control" required>
                    </div>
                </div>
                <!-- Beneficiary Phone Sec Field -->
                <div class="col-xl-4 col-md-6 mb-4 form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>16. Beneficiary Phone (Secondary):</b></p>
                    <div class="col-sm-12">
                        <input type="number" name="beneficiary_phone_sec" class="form-control">
                    </div>
                </div>
                <!-- Beneficiary Email Field -->
                <div class="col-xl-4 col-md-6 mb-4 form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>17. Beneficiary Email:</b></p>
                    <div class="col-sm-12">
                        <input type="email" name="beneficiary_email" class="form-control">
                    </div>
                </div>
            </div>

            <hr style="height:1px; border-top:3px dashed #bbb; margin: 30px;">
            <div class="row">
                <!-- Name Employer School Field -->
                <div class="col-xl-6 col-md-6 mb-4 form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>12. Name Employer/School:</b></p>
                    <div class="col-sm-12">
                        <input type="text" name="name_employer_school" class="form-control">
                    </div>
                </div>
                <!-- Name Employer School Field -->
                <div class="col-xl-6 col-md-6 mb-4 form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>13. Address Employer/School:</b></p>
                    <div class="col-sm-12">
                        <input type="text" name="address_employer_school" class="form-control">
                    </div>
                </div>
            </div>

            <hr style="height:1px; border-top:3px dashed #bbb; margin: 30px;">
            <div class="row">
                <!-- Name Employer School Field -->
                <div class="col-xl-4 col-md-6 mb-4 form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>14. Occupation:</b></p>
                    <div class="col-sm-12">
                        <input type="text" name="occupation" class="form-control">
                    </div>
                </div>
                <!-- Beneficiary Genotype Field -->
                <div class="col-xl-4 col-md-6 mb-4 form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>15. Beneficiary Genotype:</b></p>
                    <div class="col-sm-12">
                        <select name="beneficiary_genotype" class="form-control">
                            <option value="">Select</option>
                            <option value="AA">AA</option>
                            <option value="AS">AS</option>
                            <option value="SS">SS</option>
                            <option value="SC">SC</option>
                        </select>
                    </div>
                </div>
                <!-- Beneficiary Blood Group Field -->
                <div class="col-xl-4 col-md-6 mb-4 form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>16. Beneficiary Blood Group:</b></p>
                    <div class="col-sm-12">
                        <select name="beneficiary_blood_group" class="form-control">
                            <option value="">Select</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                </div>
            </div>

            <hr style="height:1px; border-top:3px dashed #bbb; margin: 30px;">
            <div class="row">
                <!-- Health Condition Field -->
                <div class="col form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>17. Health Condition:</b></p>
                    <div class="col-sm-12">
                        <input type="checkbox" class="check" name="health_condition[]" value="Hypertension"> Hypertension
                        <input type="checkbox" class="check" name="health_condition[]" value="Glaucoma"> Glaucoma
                        <input type="checkbox" class="check" name="health_condition[]" value="Asthma"> Asthma
                        <input type="checkbox" class="check" name="health_condition[]" value="Cataract"> Cataract
                        <input type="checkbox" class="check" name="health_condition[]" value="Diabetes"> Diabetes<br>
                        <input type="checkbox" class="check" name="health_condition[]" value="Heart Disease"> Heart Disease
                        <input type="checkbox" class="check" name="health_condition[]" value="Tuberclosis"> Tuberclosis
                        <input type="checkbox" class="check" name="health_condition[]" value="Cancer"> Cancer
                        <input type="checkbox" class="check" name="health_condition[]" value="Duodenal Ulcer" > Duodenal Ulcer<br>
                        <input type="checkbox" class="check" name="health_condition[]" value="Peptic Ulcer" > Peptic Ulcer
                        <input type="checkbox" class="check" name="health_condition[]" value="Kidney Disease" > Kidney Disease
                        <input type="checkbox" class="check" name="health_condition[]" value="Hiv/Aids" > Hiv/Aids
                        <input type="checkbox" class="check" name="health_condition[]" value="Fibroid" > Fibroid<br>
                        <input type="checkbox" class="check" name="health_condition[]" value="Sickle Cell" > Sickle Cell
                        <input type="checkbox" class="check" name="health_condition[]" value="Epilepsy"> Epilepsy
                        <input type="checkbox" class="check" name="health_condition[]" value="Arthritis"> Arthritis<br>
                    </div>
                </div>
                <!-- Disability Field -->
                <div class=" col form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>18. Disability:</b></p>
                    <div class="col-sm-12">
                        <input type="checkbox" class="check" name="disability[]" value="Visual Impairment/Seeing"> Visual Impairment/Seeing
                        <input type="checkbox" class="check" name="disability[]" value="Hearing Impairment"> Hearing Impairment
                        <input type="checkbox" class="check" name="disability[]" value="Mobility" >  Mobility<br>
                        <input type="checkbox" class="check" name="disability[]" value="Daily Life Activity" > Daily Life Activity
                        <input type="checkbox" class="check" name="disability[]" value="Communication and social Function" > Communication and social Function<br>
                        <input type="checkbox" class="check" name="disability[]" value="Behavioural and Psychological Difficulty"> Behavioural and Psychological Difficulty
                        <input type="checkbox" class="check" name="disability[]" value="Fits and Seizures"> Fits and Seizures
                    </div>
                </div>
            </div>

            <hr style="height:1px; border-top:3px dashed #bbb; margin: 30px;">
            <div class="row">
                <!-- Beneficiary Allergies Field -->
                <div class="col form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>19. Beneficiary Allergies:</b></p>
                    <div class="col-sm-12">
                        <input type="text" name="beneficiary_allergies" class="form-control">
                    </div>
                </div>
                <!-- Pregnant  Vulnerable Preg Field -->
                <div class="col form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>20. Pregnant/Vulnerable:</b></p>
                    <div class="col-sm-12">
                        <select name="pregnant__vulnerable_preg" class="form-control">
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <!-- Ever Had Surgery Field -->
                <div class="col form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>21. Ever Had Surgery?:</b></p>
                    <div class="col-sm-12">
                        <select name="ever_had_surgery" class="form-control">
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
            </div>

            <hr style="height:1px; border-top:3px dashed #bbb; margin: 30px;">
            <div class="row">
                <!-- Surgery Type Field -->
                <div class="col form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>22. Surgery Type:</b></p>
                    <div class="col-sm-12">
                        <input type="text" name="surgery_type" class="form-control">
                    </div>
                </div>
                <!-- Surgery Year Field -->
                <div class="col form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>23. Surgery Year:</b></p>
                    <div class="col-sm-12">
                        <input type="number" name="surgery_year" class="form-control">
                    </div>
                </div>
            </div>

            <hr style="height:1px; border-top:3px dashed #bbb; margin: 30px;">
            <div class="row">
                <!-- Attach Passport Photo Field -->
                <div class="col form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>34. Attach A Passport Photo:</b></p>
                    <div class="col-sm-12">
                        <div><input type="file" name="attach_passport_photo" class="form-control"></div>
                    </div>
                </div>
                <!-- Agreement To All In Form Field -->
                <div class="col form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>35. Do you agree to all Data in this form::</b></p>
                    <div class="col-sm-12">
                        <select name="agreement_to_all_in_form" class="form-control">
                            <option value="">Select</option>
                            <option value="Agree">Agree</option>
                            <option value="Disagree">Disagree</option>
                        </select>
                    </div>
                </div>
                <!-- Form Agreement Date Field -->
                <div class="col form-group">
                    <p class="mt-3" style="text-align: left; margin-left: 1cm;"><b>36. Form Agreement Date:</b></p>
                    <div class="col-sm-12">
                        <input type="date" name="form_agreement_date" class="form-control">
                    </div>
                </div>
            </div>

            <hr style="height:1px; border-top:3px dashed #bbb; margin: 30px;">
            <!-- T&C -->
            <div class="col form-group">
                <p class="mt-3" style="text-align: left">I hereby declare that all the informtion provided are all true to the best of my knowledge, and that I have not withheld any information.
                    I agree to abide by the terms and conditions of the Enugu State universal health coverage scheme (ESUHCS).</p>
                <button class="btn btn-primary" name="submit" type="submit">Register Beneficiary</button>
            </div>
        </form>


@endsection
@extends('layouts.main')

@section('content')
    <!-- breadcrumb area start -->
    {{-- <section class="breadcrumb-area bg-default" data-background="assets/breadcrumb-bg.jpg">
    <img src="assets/shape-1.png" alt="" class="breadcrumb-shape">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb-title">Application</h2>
                    <div class="breadcrumb-list">
                        <a href="/">Home</a>
                        <span>Application</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    <!-- breadcrumb area end -->

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <section class="h3_admission-area pt-100 pb-150">
        <img src="/assets/main/scholar.webp" alt="" class="h3_admission-bg pb-100">
        <img src="/assets/shape-1.png" alt="" class="h3_admission-shape-1">
        <img src="/assets/shape-3.png" alt="" class="h3_admission-shape-2">
        <div class="container">
            <div class="h3_admission-wrap mr-65 mb-10">
                {{-- <img src="assets/img/admission/3/shape-2.png" alt="" class="h3_admission-wrap-shape-2"> --}}
                <h2 class="breadcrumb-title" style="text-align: center;">Application</h2>
                <div class="section-area-3 mb-10 small-section-area-3">
                    <span class="section-subtitle" style="color:rgb(123, 22, 23);">Kindly Note The Following</span>
                    <h2 class="section-title mb-1">USE BLOCK LETTERS THROUGHOUT!</h2>
                    <p class="section-text mb-1">
                        1. An applicant must be unemployed.
                    </p>
                    <p class="section-text mb-1">
                        2. The applicant should be from Adamawa central Senatorial District.
                    </p>
                    <p class="section-text mb-1">
                        3. The Applicant should attach to this application the following photocopies:
                    </p>
                </div>
                <div class="h3_admission-content mb-10">
                    <div class="row">
                        {{-- <div class="col-sm-6">
                            <span><i class="fa-regular fa-check"></i>Voter card</span>
                        </div> --}}
                        <div class="col-sm-6">
                            <span><i class="fa-regular fa-check"></i>Photocopy of Admission letter</span>
                        </div>
                        <div class="col-sm-6">
                            <span><i class="fa-regular fa-check"></i>Last semester result showing CGPA</span>
                        </div>
                        <div class="col-sm-6">
                            <span><i class="fa-regular fa-check"></i>Recent Registration Receipt</span>
                        </div>
                        <div class="col-sm-6">
                            <span><i class="fa-regular fa-check"></i>Indigene letter</span>
                        </div>
                        {{-- <div class="col-sm-6">
                            <span><i class="fa-regular fa-check"></i>SSCE</span>
                        </div> --}}
                    </div>
                </div>
                <div class="h3_admission-button">
                    {{-- <a href="#" class="theme-btn theme-btn-medium theme-btn-3">Apply Now<i class="fa-light fa-arrow-up-right"></i></a> --}}
                    <div class="form-check mt-3">
                        <input class="form-check-input" type="checkbox" id="agreement"
                            {{ config('app.application') ? '' : 'disabled' }} required>
                        <label class="form-check-label" for="agreement">
                            I have read and agree to the terms and conditions.
                        </label>
                    </div>
                    <div class="h3_admission-button mt-3">
                        <button type="button" style=" background-color:rgb(104,12,13);"
                            class="theme-btn theme-btn-medium theme-btn-3" onclick="showApplicationSection()"
                            {{ config('app.application') ? '' : 'disabled' }}>
                            Continue
                        </button>
                    </div>

                    <script>
                        function showApplicationSection() {
                            if (document.getElementById('agreement').checked) {
                                document.getElementById('appliaction_section').style.display = 'block';
                                window.location.hash = '#appliaction_section';
                            } else {
                                alert('You must agree to the terms and conditions before continuing.');
                            }
                        }
                    </script>
                </div>
            </div>
            {{-- </div>
            </div> --}}
        </div>
    </section>
    <section class="h3_admission-area pt-50 pb-50">
    </section>

    @if (config('app.application'))
    <!-- Application area start -->
    <section class="contact-area pt-100 pb-100" id="appliaction_section" style="display: none;">
        <div class="container">
            <div class="contact-wrap">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="contact-content pr-80 mb-20">
                            <h3 class="contact-title mb-25">Scholarship Application Form</h3>
                            <form action="{{ route('main.store.scholarship') }}" method="POST" class="contact-form"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="name">Full Name <span style="color: red;">*</span></label>
                                            <input class="form-input mb-30 mt-10" type="text" id="name"
                                                name="name" value="{{ old('name') }}" required>
                                            {{-- <span class="inner-icon"><i class="fa-thin fa-user"></i></span> --}}
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input">
                                            <label for="gender">Gender <span style="color: red;">*</span></label>
                                            <select id="gender" name="gender" class="form-select mb-30 mt-10" required>
                                                <option value="">Select Gender</option>
                                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male
                                                </option>
                                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>
                                                    Female</option>
                                            </select>
                                            @error('gender')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="institution">Institution <span style="color: red;">*</span></label>
                                            <select id="institution" onchange="updateOUNI(this.value);" name="institution"
                                                class="form-select mb-30" required>
                                                <option value="">Select institution</option>
                                            </select>
                                            <span id="otherss"></span>

                                            {{-- <input class="form-control" type="text" id="institution" name="institution" value="{{ old('institution') }}" required> --}}
                                            {{-- <span class="inner-icon"><i class="fa-thin fa-building"></i></span> --}}
                                            @error('institution')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    fetch('{{ url('/nigerian-university.json') }}')
                                                        .then(response => response.json())
                                                        .then(data => {
                                                            const institutionSelect = document.getElementById('institution');
                                                            data.forEach(university => {
                                                                const option = document.createElement('option');
                                                                option.value = university.name;
                                                                option.textContent = university.name;
                                                                institutionSelect.appendChild(option);
                                                            });

                                                            const option = document.createElement('option');
                                                            option.value = "Others";
                                                            option.textContent = "Others";
                                                            institutionSelect.appendChild(option);
                                                        })
                                                        .catch(error => console.error('Error fetching universities:', error));
                                                });

                                                function updateOUNI(selectedUNI) {

                                                    var othersSelect = document.getElementById("otherss");

                                                    if (selectedUNI === "Others") {
                                                        othersSelect.innerHTML =
                                                            '<input class="form-control" type="text" placeholder="Please enter the name of your institution" id="institution" name="institution_o" value="" required>';
                                                    } else {
                                                        othersSelect.innerHTML = '';
                                                    }
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="registration_no">Registration Number <span
                                                    style="color: red;">*</span></label>
                                            <input class="form-control" type="text" id="registration_no"
                                                name="registration_no" value="{{ old('registration_no') }}" required>
                                            {{-- <span class="inner-icon"><i class="fa-thin fa-id-card"></i></span> --}}
                                            @error('registration_no')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="course_of_study">Course of Study <span
                                                    style="color: red;">*</span></label>
                                            <input class="form-control" type="text" id="course_of_study"
                                                name="course_of_study" value="{{ old('course_of_study') }}" required>
                                            @error('course_of_study')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="duration">Course Duration (Years) <span
                                                    style="color: red;">*</span></label>
                                            <input class="form-control" type="number" id="duration" name="duration"
                                                value="{{ old('duration') }}" required>
                                            @error('duration')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="level">Current Level <span style="color: red;">*</span></label>
                                            <input class="form-control" type="text" id="level" name="level"
                                                value="{{ old('level') }}" required>
                                            @error('level')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="year_of_admission">Year of Admission <span
                                                    style="color: red;">*</span></label>
                                            <input class="form-control" type="number" id="year_of_admission"
                                                name="year_of_admission" value="{{ old('year_of_admission') }}" required>
                                            @error('year_of_admission')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="date_of_birth">Date of Birth <span
                                                    style="color: red;">*</span></label>
                                            <input class="form-control" type="date" id="date_of_birth"
                                                name="date_of_birth" value="{{ old('date_of_birth') }}" required>
                                            {{-- <span class="inner-icon"><i class="fa-thin fa-calendar"></i></span> --}}
                                            @error('date_of_birth')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input">
                                            <label for="marital_status">Marital Status <span
                                                    style="color: red;">*</span></label>
                                            <select id="marital_status" name="marital_status" class="form-select mb-30"
                                                required>
                                                <option value="">Select Status</option>
                                                <option value="single"
                                                    {{ old('marital_status') == 'single' ? 'selected' : '' }}>Single
                                                </option>
                                                <option value="married"
                                                    {{ old('marital_status') == 'married' ? 'selected' : '' }}>Married
                                                </option>
                                            </select>
                                            @error('marital_status')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="contact-form-input mb-30">
                                            <label for="permanent_address">Permanent Address <span
                                                    style="color: red;">*</span></label>
                                            <textarea class="form-control" name="permanent_address" id="exampleFormControlTextarea1" rows="3">{{ old('permanent_address') }}</textarea>
                                            @error('permanent_address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="bank_name">Bank Name <span style="color: red;">*</span></label>
                                            <input class="form-control" type="text" id="bank_name" name="bank_name"
                                                value="{{ old('bank_name') }}" required>
                                            @error('bank_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="account_number">Account Number <span
                                                    style="color: red;">*</span></label>
                                            <input class="form-control" type="number" id="account_number"
                                                name="account_number" value="{{ old('account_number') }}" required>
                                            @error('account_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="gsm_number">Phone Number <span
                                                    style="color: red;">*</span></label>
                                            <input class="form-control" type="number" id="gsm_number" name="gsm_number"
                                                value="{{ old('gsm_number') }}" required>
                                            {{-- <span class="inner-icon"><i class="fa-thin fa-phone"></i></span> --}}
                                            @error('gsm_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="email">Email Address <span style="color: red;">*</span></label>
                                            <input class="form-control" type="email" id="email" name="email"
                                                value="{{ old('email') }}" required>
                                            {{-- <span class="inner-icon"><i class="fa-thin fa-envelope"></i></span> --}}
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="local_government">Local Government <span
                                                    style="color: red;">*</span></label>
                                            <select id="local_government" name="local_government"
                                                class="form-select mb-30" required onchange="updateWards(this.value);">
                                                <option value="">Select Local Government</option>
                                                <option value="Fufore"
                                                    {{ old('local_government') == 'Fufore' ? 'selected' : '' }}>Fufore
                                                </option>
                                                <option value="Girei"
                                                    {{ old('local_government') == 'Girei' ? 'selected' : '' }}>Girei
                                                </option>
                                                <option value="Gombi"
                                                    {{ old('local_government') == 'Gombi' ? 'selected' : '' }}>Gombi
                                                </option>
                                                <option value="Song"
                                                    {{ old('local_government') == 'Song' ? 'selected' : '' }}>Song</option>
                                                <option value="Hong"
                                                    {{ old('local_government') == 'Hong' ? 'selected' : '' }}>Hong</option>
                                                <option value="Yola North"
                                                    {{ old('local_government') == 'Yola North' ? 'selected' : '' }}>Yola
                                                    North</option>
                                                <option value="Yola South"
                                                    {{ old('local_government') == 'Yola South' ? 'selected' : '' }}>Yola
                                                    South</option>
                                            </select>
                                            @error('local_government')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="wardss"> <span style="color: red;">*</span></label>
                                            <select id="wardss" name="ward" class="form-select mb-30"
                                                aria-label="Default select example">
                                                {{-- <option value="">Select Ward</option> --}}
                                            </select>
                                            <script>
                                                function updateWards(selectedLGA) {
                                                    var lgaWards = {
                                                        "Fufore": ["Wuro Bokki", "Ribadu", "Gurin", "Fufore", "Pariya", "Farang", "Fufore Mayo Ine", "Karlahi",
                                                            "Yadim Uki-Tuki", "Beti"
                                                        ],
                                                        "Girei": ["Wuro Dole", "Jera Bakari", "Tombo", "Jera Bakari", "Girei II", "Modire", "Dakri", "Damare",
                                                            "Goron", "Girei I"
                                                        ],
                                                        "Gombi": ["Gabun", "Ga'anda", "Tawa", "G/North", "Guyaku", "Boga Dinga", "Duwa", "Garkida", "Yang",
                                                            "G/South"
                                                        ],
                                                        "Song": ["Kilage Funa", "Sigire", "Gudun Mboi", "Dirma", "Kilage Hirna", "Sonng Waje", "Waltadi",
                                                            "Suktu", "Dumne", "Song Gari", "Zumo"
                                                        ],
                                                        "Hong": ["Shangai", "Banghika", "Daksiri", "Hong", "Thilbang", "Shangui", "Huserizum", "Gaya",
                                                            "Mayo Lope", "Hildi", "Uba", "Garaha", "Kwarhi"
                                                        ],
                                                        "Yola North": ["Alkalawa", "Doubeli", "Nassarawo", "Karewa", "Rumde", "Luggere", "Limawa", "Yelwa",
                                                            "Jambutu", "Ajiya", "Gwadabawa"
                                                        ],
                                                        "Yola South": ["Makama B", "Adarawo", "Bako", "Mbamoi", "Toungo", "Bole Yolde/P", "Namtari", "Nguroro",
                                                            "Yolde Kohi", "Makama A", "Mbamba"
                                                        ]
                                                    };

                                                    var wardSelect = document.getElementById("wardss");

                                                    wardSelect.innerHTML = '<option value="">Select Ward</option>'; // Clear existing options

                                                    var wardd = lgaWards[selectedLGA];
                                                    if (selectedLGA in lgaWards) {
                                                        console.log(wardd);
                                                        for (var i = 0; i < wardd.length; i++) {
                                                            var ward = wardd[i];
                                                            wardSelect.innerHTML = wardSelect.innerHTML + '<option value="' + ward + '">' + ward +
                                                                '</option>';
                                                        }
                                                        // lgaWards[selectedLGA].forEach(function(ward) {
                                                        //     wardSelect.innerHTML =  wardSelect.innerHTML + '<option value="'+ward+'">'+ward+'</option>';

                                                        // });

                                                    }
                                                }
                                            </script>
                                            @error('ward')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- File uploads -->
                                    <div class="col-12">
                                        <h4 class="mb-3 mt-4">Required Documents</h4>
                                        <p class="text-red mb-3" style="color: red;">Note: Maximum file size allowed is 500KB per document. Please make sure to click Save for each uploaded document.</p>
                                    </div>
                                    {{-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="mb-30">
                                            <img id="voter_card_preview" src="" alt="Voter Card Preview"
                                                style="width: 200px; height: 150px; object-fit: cover; margin-top: 10px; display: none;">
                                            <label for="voter_card">Voter Card</label>
                                            <input type="file" class="form-control form-control-sm" id="voter_card"
                                                name="voter_card" accept="image/*" required onchange="previewFile(this)">
                                        </div>
                                    </div> --}}

                                    {{-- file-uploader livewire --}}
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                            <livewire:file-uploader inputName="admission_letter" />
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                            <livewire:file-uploader inputName="last_semester_result" />
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                            <livewire:file-uploader inputName="registration_receipt" />
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                            <livewire:file-uploader inputName="indigene_letter" />
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                            <livewire:file-uploader inputName="passport_photo" />
                                    </div>

                                
                                    {{-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="mb-30">
                                            <img id="last_semester_result_preview" src=""
                                                alt="Last Semester Result Preview"
                                                style="width: 200px; height: 150px; object-fit: cover; margin-top: 10px; display: none;">
                                            <label for="last_semester_result">Last Semester Result <span
                                                    style="color: red;">*</span></label>
                                            <input type="file" class="form-control form-control-sm"
                                                id="last_semester_result" name="last_semester_result" accept="image/*"
                                                required onchange="previewFile(this)">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="mb-30">
                                            <img id="registration_receipt_preview" src=""
                                                alt="Registration Receipt Preview"
                                                style="width: 200px; height: 150px; object-fit: cover; margin-top: 10px; display: none;">
                                            <label for="registration_receipt">Registration Receipt <span
                                                    style="color: red;">*</span></label>
                                            <input type="file" class="form-control form-control-sm"
                                                id="registration_receipt" name="registration_receipt" accept="image/*"
                                                required onchange="previewFile(this)">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="mb-30">
                                            <img id="indigene_letter_preview" src=""
                                                alt="Indigene Letter Preview"
                                                style="width: 200px; height: 150px; object-fit: cover; margin-top: 10px; display: none;">
                                            <label for="indigene_letter">Indigene Letter <span
                                                    style="color: red;">*</span></label>
                                            <input type="file" class="form-control form-control-sm"
                                                id="indigene_letter" name="indigene_letter" accept="image/*" required
                                                onchange="previewFile(this)">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="mb-30">
                                            <img id="passport_photo_preview" src="" alt="Passport Photo Preview"
                                                style="width: 200px; height: 150px; object-fit: cover; margin-top: 10px; display: none;">
                                            <label for="passport_photo">Passport Photo <span
                                                    style="color: red;">*</span></label>
                                            <input type="file" class="form-control form-control-sm"
                                                id="passport_photo" name="passport_photo" accept="image/*" required
                                                onchange="previewFile(this)">
                                        </div>
                                    </div> --}}

                                    <script>
                                        function previewFile(input) {
                                            var file = input.files[0];
                                            var reader = new FileReader();
                                            reader.onload = function(e) {
                                                var previewId = input.id + '_preview';
                                                var img = document.getElementById(previewId);
                                                img.src = e.target.result;
                                                img.style.display = 'block';
                                            }
                                            reader.readAsDataURL(file);
                                        }
                                    </script>

                                    <div class="col-12">
                                        <div class="contact-form-submit mb-30">
                                            <div class="contact-form-btn">
                                                <button type="submit"
                                                    style="float: right;  background-color:rgb(104,12,13);"
                                                    class="theme-btn theme-btn-medium theme-btn-3">Submit
                                                    Application</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="contact-map" style="height: 200px;">
        </div>
    </section>
    <!-- Application area end -->
    @endif
@endsection

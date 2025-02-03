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

    <section class="h3_admission-area pt-50 pb-40">
        <img src="/assets/main/scholar.webp" alt="" class="h3_admission-bg">
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
                        <div class="col-sm-6">
                            <span><i class="fa-regular fa-check"></i>Voter card</span>
                        </div>
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
                        <div class="col-sm-6">
                            <span><i class="fa-regular fa-check"></i>SSCE</span>
                        </div>
                    </div>
                </div>
                <div class="h3_admission-button">
                    {{-- <a href="#" class="theme-btn theme-btn-medium theme-btn-3">Apply Now<i class="fa-light fa-arrow-up-right"></i></a>
                        <div class="form-check mt-3"> --}}
                    <input class="form-check-input" type="checkbox" id="agreement" required>
                    <label class="form-check-label" for="agreement">
                        I have read and agree to the terms and conditions.
                    </label>
                </div>
                <div class="h3_admission-button mt-3">
                    <button type="button" style=" background-color:rgb(104,12,13);"
                        class="theme-btn theme-btn-medium theme-btn-3" onclick="showApplicationSection()">Continue</button>
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

    <!-- Application area start -->
    <section class="contact-area pt-120 pb-120" id="appliaction_section" style="display: none;">
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
                                            <label for="name">Full Name</label>
                                            <input class="form-control" type="text" id="name" name="name"
                                                required>
                                            <span class="inner-icon"><i class="fa-thin fa-user"></i></span>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input">
                                            <label for="gender">Gender</label>
                                            <select id="gender" name="gender"
                                                class="contact-form-list has-nice-select mb-30" required>
                                                <option value="">Select Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                            @error('gender')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="institution">Institution Name</label>
                                            <input class="form-control" type="text" id="institution" name="institution"
                                                required>
                                            <span class="inner-icon"><i class="fa-thin fa-building"></i></span>
                                            @error('institution')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="registration_no">Registration Number</label>
                                            <input class="form-control" type="text" id="registration_no"
                                                name="registration_no" required>
                                            <span class="inner-icon"><i class="fa-thin fa-id-card"></i></span>
                                            @error('registration_no')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="course_of_study">Course of Study</label>
                                            <input class="form-control" type="text" id="course_of_study"
                                                name="course_of_study" required>
                                            @error('course_of_study')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="duration">Course Duration (Years)</label>
                                            <input class="form-control" type="number" id="duration" name="duration"
                                                required>
                                            @error('duration')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="level">Current Level</label>
                                            <input class="form-control" type="text" id="level" name="level"
                                                required>
                                            @error('level')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="year_of_admission">Year of Admission</label>
                                            <input class="form-control" type="number" id="year_of_admission"
                                                name="year_of_admission" required>
                                            @error('year_of_admission')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="date_of_birth">Date of Birth</label>
                                            <input class="form-control" type="date" id="date_of_birth"
                                                name="date_of_birth" required>
                                            <span class="inner-icon"><i class="fa-thin fa-calendar"></i></span>
                                            @error('date_of_birth')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input">
                                            <label for="marital_status">Marital Status</label>
                                            <select id="marital_status" name="marital_status"
                                                class="contact-form-list has-nice-select mb-30" required>
                                                <option value="">Select Status</option>
                                                <option value="single">Single</option>
                                                <option value="married">Married</option>
                                            </select>
                                            @error('marital_status')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="contact-form-input mb-30">
                                            <label for="permanent_address">Permanent Address</label>
                                            <textarea class="form-control" name="permanent_address" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            @error('permanent_address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="bank_name">Bank Name</label>
                                            <input class="form-control" type="text" id="bank_name" name="bank_name"
                                                required>
                                            @error('bank_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="account_number">Account Number</label>
                                            <input class="form-control" type="text" id="account_number"
                                                name="account_number" required>
                                            @error('account_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="gsm_number">Phone Number</label>
                                            <input class="form-control" type="tel" id="gsm_number" name="gsm_number"
                                                required>
                                            <span class="inner-icon"><i class="fa-thin fa-phone"></i></span>
                                            @error('gsm_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="email">Email Address</label>
                                            <input class="form-control" type="email" id="email" name="email"
                                                required>
                                            <span class="inner-icon"><i class="fa-thin fa-envelope"></i></span>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="local_government">Local Government</label>
                                            <select id="local_government" name="local_government"
                                                class="contact-form-list has-nice-select mb-30" required
                                                onchange="updateWards(this.value);">
                                                <option value="">Select Local Government</option>
                                                <option value="Fufore">Fufore</option>
                                                <option value="Girei">Girei</option>
                                                <option value="Gombi">Gombi</option>
                                                <option value="Song">Song</option>
                                                <option value="Hong">Hong</option>
                                                <option value="Yola North">Yola North</option>
                                                <option value="Yola South">Yola South</option>
                                            </select>
                                            @error('local_government')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="contact-form-input mb-30">
                                            <label for="ward">Ward</label>
                                            <select id="ward" name="ward"
                                                class="contact-form-list has-nice-select mb-30">
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

                                                    var wardSelect = document.getElementById("ward");
                                                    wardSelect.innerHTML = '<option value="">Select Ward</option>'; // Clear existing options

                                                    var wardd = lgaWards[selectedLGA];
                                                    if (selectedLGA in lgaWards) {
                                                        lgaWards[selectedLGA].forEach(function(ward) {
                                                            console.log(ward);
                                                            wardSelect.innerHTML =  wardSelect.innerHTML + '<option value="'+ward+'">'+ward+'</option>';
                                                            
                                                        });
                                                    }
                                                }
                                            </script>
                                            {{-- <script>
                                            function updateWards(selectedLGA) {
                                                var lgaWards = {
                                                    "Fufore": ["Wuro Bokki", "Ribadu", "Gurin", "Fufore", "Pariya", "Farang", "Fufore Mayo Ine", "Karlahi", "Yadim Uki-Tuki", "Beti"],
                                                    "Girei": ["Wuro Dole", "Jera Bakari", "Tombo", "Jera Bakari", "Girei II", "Modire", "Dakri", "Damare", "Goron", "Girei I"],
                                                    "Gombi": ["Gabun", "Ga'anda", "Tawa", "G/North", "Guyaku", "Boga Dinga", "Duwa", "Garkida", "Yang", "G/South"],
                                                    "Song": ["Kilage Funa", "Sigire", "Gudun Mboi", "Dirma", "Kilage Hirna", "Sonng Waje", "Waltadi", "Suktu", "Dumne", "Song Gari", "Zumo"],
                                                    "Hong": ["Shangai", "Banghika", "Daksiri", "Hong", "Thilbang", "Shangui", "Huserizum", "Gaya", "Mayo Lope", "Hildi", "Uba", "Garaha", "Kwarhi"],
                                                    "Yola North": ["Alkalawa", "Doubeli", "Nassarawo", "Karewa", "Rumde", "Luggere", "Limawa", "Yelwa", "Jambutu", "Ajiya", "Gwadabawa"],
                                                    "Yola South": ["Makama B", "Adarawo", "Bako", "Mbamoi", "Toungo", "Bole Yolde/P", "Namtari", "Nguroro", "Yolde Kohi", "Makama A", "Mbamba"]
                                                };

                                                console.log(lgaWards);

                                                var wardSelect = $('#ward');
                                                wardSelect.empty().append('<option value="">Select Ward</option>');

                                                if (selectedLGA in lgaWards) {
                                                    $.each(lgaWards[selectedLGA], function(index, ward) {
                                                        wardSelect.append($('<option>', {
                                                            value: ward,
                                                            text: ward
                                                        }));
                                                    });
                                                }
                                            }
                                        </script> --}}
                                            @error('ward')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- File uploads -->
                                    <div class="col-12">
                                        <h4 class="mb-3 mt-4">Required Documents</h4>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="mb-30">
                                            <label for="voter_card">Voter Card</label>
                                            <input type="file" class="form-control form-control-lg" id="voter_card"
                                                name="voter_card" accept="image/*" required onchange="previewFile(this)">
                                            <img id="voter_card_preview" src="" alt="Voter Card Preview"
                                                style="width: 200px; height: 150px; object-fit: cover; margin-top: 10px; display: none;">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="mb-30">
                                            <label for="admission_letter">Admission Letter</label>
                                            <input type="file" class="form-control form-control-lg"
                                                id="admission_letter" name="admission_letter" accept="image/*" required
                                                onchange="previewFile(this)">
                                            <img id="admission_letter_preview" src=""
                                                alt="Admission Letter Preview"
                                                style="width: 200px; height: 150px; object-fit: cover; margin-top: 10px; display: none;">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="mb-30">
                                            <label for="last_semester_result">Last Semester Result</label>
                                            <input type="file" class="form-control form-control-lg"
                                                id="last_semester_result" name="last_semester_result" accept="image/*"
                                                required onchange="previewFile(this)">
                                            <img id="last_semester_result_preview" src=""
                                                alt="Last Semester Result Preview"
                                                style="width: 200px; height: 150px; object-fit: cover; margin-top: 10px; display: none;">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="mb-30">
                                            <label for="registration_receipt">Registration Receipt</label>
                                            <input type="file" class="form-control form-control-lg"
                                                id="registration_receipt" name="registration_receipt" accept="image/*"
                                                required onchange="previewFile(this)">
                                            <img id="registration_receipt_preview" src=""
                                                alt="Registration Receipt Preview"
                                                style="width: 200px; height: 150px; object-fit: cover; margin-top: 10px; display: none;">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="mb-30">
                                            <label for="indigene_letter">Indigene Letter</label>
                                            <input type="file" class="form-control form-control-lg"
                                                id="indigene_letter" name="indigene_letter" accept="image/*" required
                                                onchange="previewFile(this)">
                                            <img id="indigene_letter_preview" src=""
                                                alt="Indigene Letter Preview"
                                                style="width: 200px; height: 150px; object-fit: cover; margin-top: 10px; display: none;">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="mb-30">
                                            <label for="ssce">SSCE Result</label>
                                            <input type="file" class="form-control form-control-lg" id="ssce"
                                                name="ssce" accept="image/*" required onchange="previewFile(this)">
                                            <img id="ssce_preview" src="" alt="SSCE Result Preview"
                                                style="width: 200px; height: 150px; object-fit: cover; margin-top: 10px; display: none;">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="mb-30">
                                            <label for="passport_photo">Passport Photo</label>
                                            <input type="file" class="form-control form-control-lg"
                                                id="passport_photo" name="passport_photo" accept="image/*" required
                                                onchange="previewFile(this)">
                                            <img id="passport_photo_preview" src="" alt="Passport Photo Preview"
                                                style="width: 200px; height: 150px; object-fit: cover; margin-top: 10px; display: none;">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6">
                                        <div class="mb-30">
                                            <label for="signature">Signature</label>
                                            <input type="file" class="form-control form-control-lg" id="signature"
                                                name="signature" accept="image/*" required onchange="previewFile(this)">
                                            <img id="signature_preview" src="" alt="Signature Preview"
                                                style="width: 200px; height: 150px; object-fit: cover; margin-top: 10px; display: none;">
                                        </div>
                                    </div>
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
@endsection

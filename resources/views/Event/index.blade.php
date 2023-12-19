@extends('layouts.alt')

@section('content')
    <style>
        .tab-btn {
            padding: 16px 16px;
            cursor: pointer;
        }

        .tab-btn.active {
            border-bottom: 1px solid #9747FF;
            color: #9747FF;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .btn-next,
        .btn-prev {
            padding: 8px 16px;
            background-color: blue;
            color: yellow;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .tab-btn[:disabled] {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .input-field {
            border: 2px solid #9747FF;
            background-color: transparent;
            border-radius: 4px;
            padding: 8px 16px;
            width: 100%;
            outline: none;
        }

        select option {
            background-color: #9747FF;
        }

        #btn-submit {
            display: none;
        }
    </style>

    <form id="myForm" method="POST" action="{{ route('submit-form') }}">
        @csrf
        <div class="px-14 p-4">
            <div class="bg-none text-white">
                {{-- Tabs --}}
                <div class="flex h-20 w-full flex-row justify-start items-center gap-10">
                    <div class="flex flex-row justify-center items-center tab-btn active gap-4 p-10" data-tab="tab1">
                        <div class="px-3 py-1 rounded-full bg-ungu text-white">1</div>
                        <button class="text-lg" type="button">Input Information</button>
                    </div>
                    <div class="flex flex-row justify-center items-center tab-btn active gap-4 p-10" data-tab="tab2">
                        <div class="px-3 py-1 rounded-full bg-ungu text-white">2</div>
                        <button class="text-lg" type="button">Details</button>
                    </div>
                    <div class="flex flex-row justify-center items-center tab-btn active gap-4 p-10" data-tab="tab3">
                        <div class="px-3 py-1 rounded-full bg-ungu text-white">3</div>
                        <button class="text-lg" type="button">Payment</button>
                    </div>
                </div>


                <div class="py-4">
                    <img src="{{ asset('header.svg') }}" alt="">
                </div>

                {{-- Tab's content --}}
                <div id="tab1" class="tab-content">
                    <div class="flex flex-row justify-around">
                        <div class="flex flex-col w-1/2 gap-6">
                            <p>Input User Data</p>
                            <div class="flex flex-col justify-center items-start">
                                <label for="title">Title<span class="text-red">*</span></label>
                                <input type="text" id="title" name="title" class="input-field">
                            </div>
                            {{-- <div class="flex flex-col justify-center items-start">
                                <label for="category1">Category<span class="text-red">*</span></label>
                                <select name="category1" id="category1" class="input-field">
                                    <option value="event">Event</option>
                                    <option value="competition">Competition</option>
                                    <option value="bootcamp">Bootcamp</option>
                                </select>
                            </div>
                            @if()
                            <div class="flex flex-col justify-center items-start">
                                <label for="category2">Category<span class="text-red">*</span></label>
                                <select name="category2" id="category2" class="input-field">
                                    <option value="event">Event</option>
                                    <option value="competition">Competition</option>
                                    <option value="bootcamp">Bootcamp</option>
                                </select>
                            </div> --}}
                            <div class="flex flex-col justify-center items-start">
                                <label for="category1">Category<span class="text-red">*</span></label>
                                <select name="category1" id="category1" class="input-field" onchange="handleCategoryChange(this)">
                                    <option value="event">Event</option>
                                    <option value="competition">Competition</option>
                                    <option value="bootcamp">Bootcamp</option>
                                </select>
                            </div>
                            
                            <div id="category2Container" class="flex flex-col justify-center items-start" style="display: none;">
                                <label for="category2">Sub-category<span class="text-red">*</span></label>
                                <select name="category2" id="category2" class="input-field">
                                    <option value="conference">Conference</option>
                                    <option value="seminar">Seminar</option>
                                    <option value="talkshow">Talkshow</option>
                                </select>
                            </div>
                            
                            <div id="category3Container" class="flex flex-col justify-center items-start" style="display: none;">
                                <label for="category3">Sub-category<span class="text-red">*</span></label>
                                <select name="category3" id="category3" class="input-field">
                                    <option value="ctf">Capture The Flag</option>
                                    <option value="softDev">Software Development</option>
                                    <option value="hackathon">Hackathon</option>
                                </select>
                            </div>

                            <div id="category4Container" class="flex flex-col justify-center items-start" style="display: none;">
                                <label for="category4">Sub-category<span class="text-red">*</span></label>
                                <select name="category4" id="category4" class="input-field">
                                    <option value="frontEnd">Front-End</option>
                                    <option value="backEnd">Back-End</option>
                                    <option value="database">Database</option>
                                </select>
                            </div>
                            <div class="flex flex-col justify-center items-start">
                                <label for="description">Description<span class="text-red">*</span></label>
                                <textarea id="description" name="description" rows="4" cols="10" class="input-field"></textarea>
                            </div>
                        </div>
                        <div class="flex flex-col w-1/2 justify-center items-center">
                            <label class="mb-2 text-gray-500">File Upload</label>
                            <div class="flex items-center justify-center">
                                <label
                                    class="flex flex-col w-full h-32 border-4 border-blue-200 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                    <div class="flex flex-col items-center justify-center pt-7">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-12 h-w-12 text-gray-400 group-hover:text-gray-600" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                        <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                            Attach a file
                                        </p>
                                    </div>
                                    <input type="file" class="opacity-0" id="imageInput"
                                        onchange="previewImage(event)" />
                                </label>
                            </div>
                            <img id="imagePreview" src="" alt="Image Preview"
                                style="max-width: 100%; max-height: 100%; object-fit: cover; display: none;">
                        </div>
                    </div>
                    <div class="w-full py-14">
                        <hr class="w-full h-1 my-4 bg-ungu bg-opacity-70 border-0 rounded">
                        <div class="flex flex-row justify-between items-center text-white">
                            <div>
                                <p><span class="text-red">*</span>Required Field</p>
                            </div>
                            <div>
                                {{-- <button id="btn-next" class="btn-next">Next</button> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab2" class="tab-content hidden">
                    <div class="flex flex-row justify-around">
                        <div class="flex flex-col w-1/2 gap-6">
                            <p>Input Event Details</p>
                            <label for="duration">Post Duration<span class="text-red">*</span></label>
                            <div class="flex flex-row justify-between items-center w-full">
                                <div class="flex flex-col justify-center items-start w-1/2">
                                    <label for="start">Start<span class="text-red">*</span></label>
                                    <input type="datetime-local" id="start" name="start" class="input-field">
                                </div>
                                <div class="flex flex-col justify-center items-start w-1/2">
                                    <label for="End">End<span class="text-red">*</span></label>
                                    <input type="datetime-local" id="End" name="End" class="input-field">
                                </div>
                            </div>
                            <div class="flex flex-col justify-center items-start">
                                <label for="price">Ticket Price<span class="text-red">*</span></label>
                                <input type="number" id="price" name="price" min="1" value="1"
                                    class="input-field">
                            </div>
                            <div class="flex flex-col justify-center items-start">
                                <label for="held">Event Held<span class="text-red">*</span></label>
                                <input type="text" id="held" name="held" class="input-field">
                            </div>
                            <div class="flex flex-col justify-center items-start">
                                <label for="quota">Quota<span class="text-red">*</span></label>
                                <input type="number" id="quota" name="quota" min="1" value="1"
                                    class="input-field">
                            </div>
                        </div>
                        <div class="flex flex-col w-1/2 justify-center items-center">
                            <label class="mb-2 text-gray-500">File Upload</label>
                            <div class="flex items-center justify-center">
                                <label
                                    class="flex flex-col w-full h-32 border-4 border-blue-200 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                    <div class="flex flex-col items-center justify-center pt-7">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-12 h-w-12 text-gray-400 group-hover:text-gray-600" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                        <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                            Attach a file
                                        </p>
                                    </div>
                                    <input type="file" class="opacity-0" />
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="w-full py-14">
                        <hr class="w-full h-1 my-4 bg-ungu bg-opacity-70 border-0 rounded">
                        <div class="flex flex-row justify-between items-center text-white">
                            <div>
                                <p><span class="text-red">*</span>Required Field</p>
                            </div>
                            <div>
                                {{-- <button id="btn-next" class="btn-next">Next</button> --}}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div id="tab2" class="tab-content hidden">
                    <label for="field2">Field 2:</label>
                    <input type="text" id="field2" name="field2">

                    <button id="btn-prev" class="btn-prev">Previous</button>
                    <button id="btn-next" class="btn-next">Next</button>
                </div> --}}

                <div id="tab3" class="tab-content hidden">
                    <label for="field3">Field 3:</label>
                    <input type="text" id="field3" name="field3">

                    {{-- <button id="btn-prev" class="btn-prev">Previous</button> --}}
                    <button id="btn-submit" class="btn-submit" onclick="submitForm()">Submit</button>
                </div>
            </div>
        </div>
    </form>




    <script src="{{ asset('js/createEvent.js') }}"></script>
    <script>
        function submitForm() {
            var formData = new FormData(document.getElementById("myForm"));

            fetch("{{ route('submit-form') }}", {
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log("Form submitted successfully", data);
                    // Optionally, you can redirect or perform other actions here
                })
                .catch(error => {
                    console.error("Error submitting form", error);
                });
        }

        function toggleSubmitButton(tabId) {
            var submitButton = document.getElementById('btn-submit');

            if (tabId === 'tab3') {
                submitButton.style.display = 'block';
            } else {
                submitButton.style.display = 'none';
            }
        }
    </script>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('imagePreview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '';
                preview.style.display = 'none';
            }
        }
    </script>

    <script>
        function handleCategoryChange(category1Select) {
            const selectedValue = category1Select.value;

            // Hide all category containers
            document.getElementById('category2Container').style.display = 'none';
            document.getElementById('category3Container').style.display = 'none';
            document.getElementById('category4Container').style.display = 'none';

            // Show the relevant category container based on the selected value
            if (selectedValue === 'event') {
                document.getElementById('category2Container').style.display = 'flex';
            } else if (selectedValue === 'competition') {
                document.getElementById('category3Container').style.display = 'flex';
            } else if (selectedValue === 'bootcamp') {
                document.getElementById('category4Container').style.display = 'flex';
            }
        }
    </script>
@endsection

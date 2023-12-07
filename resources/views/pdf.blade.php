<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pdf Design</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <style>
        .red {
            color: red;
        }

        .text {
            font-size: 14px;
        }

        #width {
            width: 24%;
        }

        .color {
            color: black
        }
    </style>
</head>

<body>

    {{-- Page 1  --  Pdf 1 --}}
    <div id="page-1" class="text-center py-5 px-4" style="height: 100vh;">
        <div class="fs-6 fw-bold space-y-1">
            <p class="mb-1">১ নং রেজিস্টার</p>
            <p class="mb-1">আপিত সম্পত্তি ( ভূমি ও দালান / অবকাঠামো )</p>
            <p class="m-0">রেজিস্টার নং-১</p>
        </div>
        <p class="mt-3 fw-normal">জেলাঃ <span class="red">ঢাকা</span>, উপজেলা/সার্কেলঃ <span
                class="red">উত্তরা</span>,
            মৌজাঃ <span class="red">বাউনিয়া</span>, জেএল নং- <span class="red">১০৮</span>, দাগ নং- <span
                class="red">২৫৪</span>, পৌর হোল্ডিং নং-<span class="red"> ৫৬৮</span>, জমির পরিমাণ- <span
                class="red">০.০২১৪</span> একর</p>

        <table class=" table table-bordered border-dark text">
            <thead>
                <tr class="align-top">
                    <th scope="col">ক্রমিক</th>
                    <th scope="col">রেকর্ডিও মালিকদের নাম, পিতার নাম ও ঠিকানা</th>
                    <th scope="col">সম্পত্তির বর্ণনা</th>
                    <th scope="col">খতিয়ান নং</th>
                    <th scope="col">পৌর হোল্ডিং নং</th>
                    <th scope="col">দাগ নং</th>
                    <th scope="col">জমির শ্রেণি</th>
                    <th scope="col">জমির পরিমাণ (একর)</th>
                    <th scope="col">বর্তমান ভাড়া</th>
                    <th scope="col">বর্তমানে যদি কোন দখলদার থাকে তবে তার নাম, পিতার নাম ও ঠিকানা</th>
                    <th scope="col">মন্তব্য</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>(১)</td>
                    <td>(২)</td>
                    <td>(৩)</td>
                    <td>(৪)</td>
                    <td>(৫)</td>
                    <td>(৬)</td>
                    <td>(৭)</td>
                    <td>(৮)</td>
                    <td>(৯)</td>
                    <td>(১০)</td>
                    <td>(১১)</td>
                </tr>
                <tr class="text-start">
                    <td>০১</td>
                    <td><span class="fw-bold">ইমরান মোল্লা</span> <br>
                        পিতা-আতিয়ার রহমান মোল্লা
                        সাং-সুকতাইল ( বরবাড়ি ), থানা-গোপালগঞ, জেলা-গোপালগঞ্জ
                    </td>
                    <td>২ তলা বিশিষ্ট পুরনো বাড়ি</td>
                    <td>১/ক</td>
                    <td>১২৫</td>
                    <td>৪৫২</td>
                    <td>বাড়ি</td>
                    <td>০.২৫০০</td>
                    <td>২০,০০০.০০</td>
                    <td></td>
                    <td>১৯৯৮ সাল থেকে রেকর্ডিও মালিক ভোগ দখল করছে ।</td>

                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- Page 2  --  Pdf 2 --}}
    <div id="page-2" class="text-center py-5 px-4" style="height: 100vh;">
        <div class="fs-6 fw-bold space-y-1">
            <p class="mb-1">2 নং রেজিস্টার</p>
            <p class="mb-1">আপিত সম্পত্তি ( ভূমি ও দালান / অবকাঠামো )</p>
            <p class="m-২">রেজিস্টার নং-2</p>
            <p class="m-0">( ইজারাদারের লেজার বই )</p>
        </div>
        <p class="mt-3 fw-normal">জেলাঃ <span class="red">ঢাকা</span>, উপজেলা/সার্কেলঃ <span
                class="red">উত্তরা</span>,
            মৌজাঃ <span class="red">বাউনিয়া</span>, জেএল নং- <span class="red">১০৮</span>, দাগ নং- <span
                class="red">২৫৪</span>, পৌর হোল্ডিং নং-<span class="red"> ৫৬৮</span>, জমির পরিমাণ- <span
                class="red">০.০২১৪</span> একর</p>

        <table class=" table table-bordered border-dark text">
            <tbody class="text-start">
                <tr>
                    <td>(ক) আপিত কেইস নং <br>
                        (খ) মালিকদের নাম, পিতার নাম ও ঠিকানা <br>
                        (গ) সম্পত্তির বর্ণনা <br>
                        (ঘ) খতিয়ান নং <br>
                        (ঙ) দাগ নং <br>
                        (চ) পৌর হোল্ডিং নং <br>
                        (ছ) জমির পরিমাণ (একর) <br>
                        (জ) জমির শ্রেণি
                    </td>
                    <td>:-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                    </td>

                    <td id="width">

                    </td>
                    <td>(ঝ) ১ নং রেজিস্টারের ক্রমিক নং <br>
                        (ঞ) ইজারাদারের নাম, পিতার নাম ও ঠিকানা <br>
                        (ট) ইজারাকৃত জমির পরিমাণ <br>
                        (ঠ) লীজ আরম্ভের তারিখ <br>
                        (ড) লীজ শেষ হবার তারিখ <br>
                        (ঢ) ইজারা তারিখে বকেয়ার পরিমাণ (যদি থাকে) <br>
                        (ণ) বার্ষিক / মাসিক ভাড়া <br>
                        (ত) ইজারা / কাবুলিয়াত সম্পাদনের তারিখ
                    </td>

                    <td>:-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                    </td>

                    <td id="width">

                    </td>
                </tr>
            </tbody>
        </table>

        {{-- Table 2nd part --}}

        <div class="m-0 text">
            <div class="row border border-dark m-0">
                <div class="col-3 border-end border-dark">
                    <p class="fw-bold">দাবী</p>
                    <div class="row border-top border-dark h-100">
                        <div class="col border-end border-dark">
                            <p>বছর/মাস</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>বকেয়া</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>হাল</p>
                        </div>
                        <div class="col">
                            <p>মোট</p>
                        </div>
                    </div>
                </div>

                <div class="col-5 border-end border-dark">
                    <p class="fw-bold">আদায়</p>
                    <div class="row border-top border-dark">
                        <div class="col-2 border-end border-dark">
                            <p>তারিখ</p>
                        </div>
                        <div class="col-2 border-end border-dark">
                            <p>রিসিট নং</p>
                        </div>
                        <div class="col-2 border-end border-dark">
                            <p class="mb-1">যে সময়ের কর পরিশোধ</p>
                        </div>
                        <div class="col">
                            <div class="row h-100">
                                <div class=" border-bottom border-dark">
                                    <p>পরিশোধিত অর্থ </p>
                                </div>
                                <div class="col border-end border-dark">
                                    <p>বকেয়া</p>
                                </div>
                                <div class="col border-end border-dark">
                                    <p>হাল</p>
                                </div>
                                <div class="col">
                                    <p>মোট</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-3 border-end border-dark">
                    <p class="fw-bold">স্থিতি</p>
                    <div class="row border-top border-dark h-100">
                        <div class="col border-end border-dark">
                            <p>বকেয়া</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>হাল</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>মোট</p>
                        </div>
                        <div class="col">
                            <p>তারিখ</p>
                        </div>
                    </div>

                </div>

                <div class=" col ">
                    <p class="fw-bold">মন্তব্য</p>
                </div>
            </div>
            {{-- data --}}
            <div class="row border border-top-0  border-dark m-0 text-start">
                <div class="col-3 border-end border-dark">
                    <div class="row">
                        <div class="col border-end border-dark">
                            <p>(১)</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>(২)</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>(৩)</p>
                        </div>
                        <div class="col">
                            <p>(৪)</p>
                        </div>

                    </div>
                </div>

                <div class="col-5 border-end border-dark">
                    <div class="row ">
                        <div class="col border-end border-dark">
                            <p>(৫)</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>(৬)</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>(৭)</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>(৮)</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>(৯)</p>
                        </div>
                        <div class="col">
                            <p>(১০)</p>
                        </div>

                    </div>
                </div>

                <div class="col-3 border-end border-dark">
                    <div class="row">
                        <div class="col border-end border-dark">
                            <p>(১১)</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>(১২)</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>(১৩)</p>
                        </div>
                        <div class="col">
                            <p>(১৪)</p>
                        </div>

                    </div>
                </div>

                <div class="col ">
                    <p>(১৫)</p>
                </div>

            </div>

            <div class="row border border-top-0  border-dark m-0">
                <div class="col-3 border-end border-dark">
                    <div class="row">
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col">
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-5 border-end border-dark">
                    <div class="row ">
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col">
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col-3 border-end border-dark">
                    <div class="row">
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col">
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="col ">
                    <p></p>
                </div>
            </div>
        </div>
    </div>

    {{-- Page 3  --  Pdf 3 --}}
    <div id="page-3" class="text-center py-5 px-4" style="height: 100vh;">
        <div class="fs-6 fw-bold space-y-1">
            <p class="mb-1">৩ নং রেজিস্টার</p>
            <p class="mb-1">আপিত সম্পত্তি ( ভূমি ও দালান / অবকাঠামো )</p>
            <p class="m-২">রেজিস্টার নং-৩</p>
            <p class="m-0">( ইজারাদারের লেজার বই )</p>
        </div>
        <p class="mt-3 fw-normal">জেলাঃ <span class="red">ঢাকা</span>, উপজেলা/সার্কেলঃ <span
                class="red">উত্তরা</span>,
            মৌজাঃ <span class="red">বাউনিয়া</span>, জেএল নং- <span class="red">১০৮</span>, দাগ নং- <span
                class="red">২৫৪</span>, পৌর হোল্ডিং নং-<span class="red"> ৫৬৮</span>, জমির পরিমাণ- <span
                class="red">০.০২১৪</span> একর</p>

        <table class=" table table-bordered border-dark text">
            <tbody class="text-start">
                <tr>
                    <td>(ক) আপিত কেইস নং <br>
                        (খ) মালিকদের নাম, পিতার নাম ও ঠিকানা <br>
                        (গ) সম্পত্তির বর্ণনা <br>
                        (ঘ) খতিয়ান নং <br>
                        (ঙ) দাগ নং <br>
                        (চ) পৌর হোল্ডিং নং <br>
                        (ছ) জমির পরিমাণ (একর) <br>
                        (জ) জমির শ্রেণি
                    </td>
                    <td>:-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                    </td>

                    <td id="width">

                    </td>
                    <td>(ঝ) ১ নং রেজিস্টারের ক্রমিক নং <br>
                        (ঞ) ইজারাদারের নাম, পিতার নাম ও ঠিকানা <br>
                        (ট) ইজারাকৃত জমির পরিমাণ <br>
                        (ঠ) লীজ আরম্ভের তারিখ <br>
                        (ড) লীজ শেষ হবার তারিখ <br>
                        (ঢ) ইজারা তারিখে বকেয়ার পরিমাণ (যদি থাকে) <br>
                        (ণ) বার্ষিক / মাসিক ভাড়া <br>
                        (ত) ইজারা / কাবুলিয়াত সম্পাদনের তারিখ
                    </td>

                    <td>:-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                        :-<br>
                    </td>

                    <td id="width">

                    </td>
                </tr>
            </tbody>
        </table>

        {{-- Table 2nd part --}}
        <div class=" text">
            <div class="row border border-dark m-0">
                <div class="col-1 border-end border-dark">
                    <p class="fw-bold">পরিশোধ</p>
                </div>

                <div class="col-1 border-end border-dark">
                    <p class="fw-bold">ভাউচার নং ও তারিখ</p>
                </div>

                <div class="col-2 border-end border-dark">
                    <p class="fw-bold">ভূমি উন্নয়ন কর</p>
                    <div class="row border-top border-dark">
                        <div class="col border-end border-dark">
                            <p>বকেয়া</p>
                        </div>
                        <div class="col">
                            <p>হাল</p>
                        </div>
                    </div>
                </div>

                <div class="col-7 border-end border-dark">
                    <p class="fw-bold">সেলামি</p>
                    <div class="row border-top border-dark">
                        <div class="col border-end border-dark">
                            <p>১ম কোয়াটার</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>২য় কোয়াটার</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>৩য় কোয়াটার</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>৪থ কোয়াটার</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>অন্যান্য</p>
                        </div>
                        <div class="col">
                            <p>মোট</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <p class="fw-bold">মন্তব্য</p>
                </div>
            </div>

            {{-- data --}}
            <div class="row border border-top-0  border-dark m-0 text-start">
                <div class="col-1 border-end border-dark">
                    <p>(১)</p>
                </div>
                <div class="col-1 border-end border-dark">
                    <p>(২)</p>
                </div>
                <div class="col-2 border-end border-dark">
                    <div class="row">
                        <div class="col border-end border-dark">
                            <p>(৩)</p>
                        </div>
                        <div class="col">
                            <p>(৪)</p>
                        </div>
                    </div>
                </div>
                <div class="col-7 border-end border-dark">
                    <div class="row">
                        <div class="col border-end border-dark">
                            <p>(৫)</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>(৬)</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>(৭)</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>(৮)</p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>(৯)</p>
                        </div>
                        <div class="col ">
                            <p>(10)</p>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <p>(১১)</p>
                </div>

            </div>

            <div class="row border border-top-0  border-dark m-0 text-start">
                <div class="col-1 border-end border-dark">
                    <p></p>
                </div>
                <div class="col-1 border-end border-dark">
                    <p></p>
                </div>
                <div class="col-2 border-end border-dark">
                    <div class="row">
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col">
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-7 border-end border-dark">
                    <div class="row">
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col ">
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-1">
                    <p></p>
                </div>

            </div>
        </div>
    </div>

    {{-- Page 4  --  Pdf 4 --}}
    <div id="page-4" class="text-center py-5 px-4" style="height: 100vh;">
        <div class="fs-6 fw-bold space-y-1">
            <p class="mb-1">৪ নং রেজিস্টার</p>
            <p class="mb-1">আপিত সম্পত্তি ( ভূমি ও দালান / অবকাঠামো )</p>
            <p class="m-২">রেজিস্টার নং-৪</p>
            <p class="m-0">( স্থিতি পত্র )</p>
        </div>
        <p class="mt-3 fw-normal">জেলাঃ <span class="red">ঢাকা</span>, উপজেলা/সার্কেলঃ <span
                class="red">উত্তরা</span>,
            মৌজাঃ <span class="red">বাউনিয়া</span>, জেএল নং- <span class="red">১০৮</span>, দাগ নং- <span
                class="red">২৫৪</span>, পৌর হোল্ডিং নং-<span class="red"> ৫৬৮</span>, জমির পরিমাণ- <span
                class="red">০.০২১৪</span> একর</p>



        {{-- Table Part --}}
        <div class="text">
            <div class="row border border-dark m-0">
                <div class="col-1 border-end border-dark">
                    <p class="fw-bold">আপিত সম্পত্তি কেইস নং</p>
                </div>

                <div class="col-1 border-end border-dark">
                    <p class="fw-bold">আয়ের কর</p>
                </div>

                <div class="col-3 border-end border-dark">
                    <p class="fw-bold">আয়</p>
                    <div class="row border-top border-dark">
                        <div class="col-5 border-end border-dark">
                            <p>আয়ের প্রকৃতি</p>
                        </div>
                        <div class="col">
                            <p>পরিমাণ</p>
                            <div class="row border-top border-dark">
                                <div class="col border-end border-dark">
                                    <p>টাকা</p>
                                </div>
                                <div class="col">
                                    <p>পয়সা</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-5 border-end border-dark">
                    <p class="fw-bold">কর</p>
                    <div class="row border-top border-dark">
                        <div class="col-4 border-end border-dark">
                            <p>ভূমি উ. কর/ পৌর কর/ অন্যান্য কর </p>
                        </div>
                        <div class="col border-end border-dark">
                            <p>তারিখ</p>
                        </div>
                        <div class="col-5 ">
                            <p>পরিমাণ</p>
                            <div class="row border-top border-dark">
                                <div class="col border-end border-dark">
                                    <p>টাকা</p>
                                </div>
                                <div class="col">
                                    <p>পয়সা</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-1 border-end border-dark">
                    <p class="fw-bold">স্থিতি</p>
                </div>

                <div class="col-1">
                    <p class="fw-bold">মন্তব্য</p>
                </div>
            </div>

            {{-- data --}}
            <div class="row border border-top-0 border-dark m-0 text-start">
                <div class="col-1 border-end border-dark">
                    <p></p>
                </div>
                <div class="col-1 border-end border-dark">
                    <p></p>
                </div>
                <div class="col-3 border-end border-dark">
                    <div class="row border-bottom border-dark">
                        <div class="col-5 border-end border-dark">
                            <p>১. সালামি</p>
                        </div>
                        <div class="col ">
                            <div class="row h-100">
                                <div class="col border-end border-dark">
                                    <p></p>
                                </div>
                                <div class="col">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-bottom border-dark">
                        <div class="col-5 border-end border-dark">
                            <p>২. ভাড়া</p>
                        </div>
                        <div class="col">
                            <div class="row h-100">
                                <div class="col border-end border-dark">
                                    <p></p>
                                </div>
                                <div class="col">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row border-bottom border-dark">
                        <div class="col-5 border-end border-dark">
                            <p>৩. নিলাম ডাক</p>
                        </div>
                        <div class="col">
                            <div class="row h-100">
                                <div class="col border-end border-dark">
                                    <p></p>
                                </div>
                                <div class="col">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 border-end border-dark">
                            <p>৪. অন্যান্য</p>
                        </div>
                        <div class="col">
                            <div class="row h-100">
                                <div class="col border-end border-dark">
                                    <p></p>
                                </div>
                                <div class="col">
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5 border-end border-dark ">
                    <div class="row h-100">
                        <div class="col-4 border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col border-end border-dark">
                            <p></p>
                        </div>
                        <div class="col-5 ">
                            <div class="">
                                <div class="row">
                                    <div class="col border-end border-dark">
                                        <p>0</p>
                                    </div>
                                    <div class="col">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row border-top border-dark">
                                    <div class="col border-end border-dark">
                                        <p>0</p>
                                    </div>
                                    <div class="col">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row border-top border-dark">
                                    <div class="col border-end border-dark">
                                        <p>0</p>
                                    </div>
                                    <div class="col">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="row border-top border-dark">
                                    <div class="col border-end border-dark">
                                        <p>0</p>
                                    </div>
                                    <div class="col">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1 border-end border-dark">
                    <p></p>
                </div>
                <div class="col-1">
                    <p></p>
                </div>

            </div>
        </div>
    </div>

</body>

</html>

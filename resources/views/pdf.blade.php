<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pdf Design</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <style>
        body {
            margin: 0 100px;
        }

        .blue {
            color: #2165b8;
        }

        .text {
            font-size: 14px;
        }

        .color {
            color: black
        }

        .width1 {
            width: 5%;
        }

        .width2 {
            width: 10%;
        }

        .width3 {
            width: 20%;
        }

        .width4 {
            width: 30%;
        }

        .width5 {
            width: 40%;
        }
    </style>
</head>

<body>

    {{-- Page 1  --  Pdf 1 --}}

    <div class="fs-2 fw-bold text-center mt-5 blue">
        অর্পিত সম্পত্তি এন্ট্রি ফর্ম
    </div>
    <!-- <div><img class="" style="height: 200px; width: 200px;" src="/public/arrow2.png" alt=""></div> -->
    <div id="page-1" class="py-5" style="height: 100vh;">
        <div class="fs-6 fw-bold mb-2 blue">
            ১। ভিপি জমির তফসিল
        </div>


        <table class=" table table-bordered border-dark text">

            <tr class="">
                <td class="width3">গেজেটের ক্রমিক নং *</td>
                <td class="width1">:</td>
                <td class="width5"></td>
                <td class="width1"></td>
                <td class="width1"></td>
            </tr>

            <tbody class=" ">

                <tr>
                    <td>ভিপি কেইস নং *</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>সাবেক / বর্তমান থানা *</td>
                    <td>:</td>
                    <td></td>
                    <td>></td>
                    <td>+</td>
                </tr>

                <tr>
                    <td>মৌজা *</td>
                    <td>:</td>
                    <td></td>
                    <td>></td>
                    <td>+</td>
                </tr>

                <tr>
                    <td>হোল্ডিং নং *</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>রেকর্ড (খতিয়ানের ধরন) *</td>
                    <td>:</td>
                    <td></td>
                    <td>></td>
                    <td>+</td>
                </tr>

                <tr>
                    <td>দাগ নং *</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                    <td>+</td>
                </tr>

                <tr>
                    <td>খতিয়ান নং *</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                    <td>+</td>
                </tr>

                <tr>
                    <td>শ্রেণী *</td>
                    <td>:</td>
                    <td>পরিমাণ (একর)</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>></td>
                    <td>০০.০০০</td>
                    <td></td>
                    <td>+</td>
                </tr>

                <tr>
                    <td></td>
                    <td>></td>
                    <td></td>
                    <td></td>
                    <td>+</td>
                </tr>

            </tbody>
        </table>
    </div>

    {{-- Page 2  --  Pdf 2 --}}
    <div id="page-2" class="py-5" style="height: 100vh;">
        <div class="fs-6 fw-bold mb-2 blue">
            ২। জমির বর্তমান অবস্থা
        </div>
        <table class=" table table-bordered border-dark text">
            <tr class="">
                <td class="width4">লিজকৃ্ত জমির পরিমাণ (একর)</td>
                <td class="width1">:</td>
                <td class="width3"></td>
                <td class="width1">সন</td>
                <td class="width3"></td>
            </tr>

            <tbody class="">
                <tr>
                    <td>অলিজকৃ্ত জমির পরিমাণ (একর)</td>
                    <td>:</td>
                    <td></td>
                    <td>সন</td>
                    <td></td>
                </tr>

                <tr>
                    <td>মোট দাবীর পরিমাণ (একর)</td>
                    <td>></td>
                    <td>হাল / বকেয়া</td>
                    <td></td>
                    <td>+</td>
                </tr>
                <tr>
                    <td>লিজ মানির পরিমাণ (একর)</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                    <td>+</td>
                </tr>

            </tbody>
        </table>

    </div>

    {{-- Page 3  --  Pdf 3 --}}
    <div id="page-3" class="py-5" style="height: 100vh;">
        <div class="fs-6 fw-bold mb-2 blue">
            ৩। গেজেট অনুযায়ী মালিকের তথ্য
        </div>
        <table class=" table table-bordered border-dark text">
            <tr class="">
                <td class="width4">নাম</td>
                <td class="width1">:</td>
                <td class="width5"></td>
                <td class="width1"></td>
            </tr>

            <tbody class="">
                <tr>
                    <td>এনআইডি নম্বর</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>পিতা / স্বামীর নাম</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>মাতার নাম</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>জেলা</td>
                    <td>:</td>
                    <td></td>
                    <td>></td>
                </tr>

                <tr>
                    <td>উপজেলা / থানা</td>
                    <td>:</td>
                    <td></td>
                    <td>></td>
                </tr>

                <tr>
                    <td>ঠিকানা (গ্রাম , মহল্লা)</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>সেন্সার্স তালিকায় আছে কি না?</td>
                    <td>:</td>
                    <td>হ্যাঁ / না</td>
                    <td></td>
                </tr>

            </tbody>
        </table>

    </div>

    {{-- Page 4  --  Pdf 4 --}}
    <div id="page-4" class="py-5">
        <div class="fs-6 fw-bold mb-2 blue">
            ৪ । পূর্ববর্তী লিজিদের তথ্য - ১
        </div>
        <table class=" table table-bordered border-dark text">
            <tr class="">
                <td class="width4">নাম</td>
                <td class="width1">:</td>
                <td class="width5"></td>
                <td class="width1"></td>
            </tr>

            <tbody class="">
                <tr>
                    <td>এনআইডি নম্বর</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>পিতা / স্বামীর নাম</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>মাতার নাম</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>জেলা</td>
                    <td>:</td>
                    <td></td>
                    <td>></td>
                </tr>

                <tr>
                    <td>উপজেলা / থানা</td>
                    <td>:</td>
                    <td></td>
                    <td>></td>
                </tr>

                <tr>
                    <td>ঠিকানা (গ্রাম , মহল্লা)</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>শ্রেণী *</td>
                    <td>:</td>
                    <td>পরিমাণ (একর)</td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>></td>
                    <td>০০.০০০</td>
                    <td>+</td>
                </tr>

                <tr>
                    <td></td>
                    <td>></td>
                    <td></td>
                    <td>+</td>
                </tr>

                <tr>
                    <td>লিজমানির পরিমাণ</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>ডিসিআর নং</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>লিজমানি পরিশোধ এর তারিখ</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>লিজের মেয়াদ</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>

        </table>

        <!-- Table 2nd part -->
        <div class="fs-6 fw-bold mt-4 mb-1">
            আপলোড <span class="blue">(পূর্ববর্তী লিজিদের সংযুক্তি প্রদান করুন)</span>
        </div>
        <table class=" table table-bordered border-dark text">
            <tr class="">
                <th class="width2">ক্রমিক</th>
                <th class="width4">প্রয়োজনীয় কাগজ পত্রের নাম</th>
                <th class="width3">ফাইল আপলোড করুন</th>
            </tr>

            <tbody class="">
                <tr>
                    <td>১</td>
                    <td>ছবি</td>
                    <td class="blue">ফাইল আপলোড করুন</td>
                </tr>

                <tr>
                    <td>২</td>
                    <td>সর্বশেষ ডি. সি. আর. কপি</td>
                    <td class="blue">ফাইল আপলোড করুন</td>
                </tr>

                <tr>
                    <td>৩</td>
                    <td>জমিতে ভিপি সম্পত্তি সাইনবোর্ডসহ স্থির চিত্র</td>
                    <td class="blue">ফাইল আপলোড করুন</td>
                </tr>

                <tr>
                    <td>৪</td>
                    <td>অন্যান্য</td>
                    <td class="blue">ফাইল আপলোড করুন</td>
                </tr>

            </tbody>

        </table>

    </div>

    {{-- Page 5  --  Pdf 5 --}}
    <div id="page-5" class="py-5">
        <div class="fs-6 fw-bold mb-2 blue">
            ৫ । বর্তমান লিজিদের তথ্য - ১
        </div>
        <table class=" table table-bordered border-dark text">
            <tr class="">
                <td class="width4">নাম পরিবর্তন এর কারন</td>
                <td class="width1">:</td>
                <td class="width5">ওয়াারিশ/দখল/লিজ শর্ত ভঙ্গে/না দাবী মূলে</td>
                <td class="width1">></td>
            </tr>

            <tbody class="">
                <tr>
                    <td>নাম</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>এনআইডি নম্বর</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>পিতা / স্বামীর নাম</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>মাতার নাম</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>জেলা</td>
                    <td>:</td>
                    <td></td>
                    <td>></td>
                </tr>

                <tr>
                    <td>উপজেলা / থানা</td>
                    <td>:</td>
                    <td></td>
                    <td>></td>
                </tr>

                <tr>
                    <td>ঠিকানা (গ্রাম , মহল্লা)</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>শ্রেণী *</td>
                    <td>:</td>
                    <td>পরিমাণ (একর)</td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>></td>
                    <td>০০.০০০</td>
                    <td>+</td>
                </tr>

                <tr>
                    <td></td>
                    <td>></td>
                    <td></td>
                    <td>+</td>
                </tr>

                <tr>
                    <td>লিজমানির পরিমাণ</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>ডিসিআর নং</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>লিজমানি পরিশোধ এর তারিখ</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>লিজের মেয়াদ</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>সাইনবোর্ড টাঙানো আছে কি না?</td>
                    <td>:</td>
                    <td>হ্যাঁ / না</td>
                    <td></td>
                </tr>

                <tr>
                    <td>তদন্তকারী কর্মকর্তা</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

            </tbody>

        </table>

        <!-- Table 2nd part -->
        <div class="fs-6 fw-bold mt-4 mb-1">
            আপলোড <span class="blue">(বর্তমান লিজিদের সংযুক্তি প্রদান করুন)</span>
        </div>
        <table class=" table table-bordered border-dark text">
            <tr class="">
                <th class="width2">ক্রমিক</th>
                <th class="width4">প্রয়োজনীয় কাগজ পত্রের নাম</th>
                <th class="width3">ফাইল আপলোড করুন</th>
            </tr>

            <tbody class="">
                <tr>
                    <td>১</td>
                    <td>ছবি</td>
                    <td class="blue">ফাইল আপলোড করুন</td>
                </tr>

                <tr>
                    <td>২</td>
                    <td>প্রতিবেদনের স্থির চিত্র</td>
                    <td class="blue">ফাইল আপলোড করুন</td>
                </tr>

                <tr>
                    <td>৩</td>
                    <td>বরাদ্ধপত্র</td>
                    <td class="blue">ফাইল আপলোড করুন</td>
                </tr>

                <tr>
                    <td>৪</td>
                    <td>না-দাবী নামা</td>
                    <td class="blue">ফাইল আপলোড করুন</td>
                </tr>

                <tr>
                    <td>৫</td>
                    <td>অন্যান্য</td>
                    <td class="blue">ফাইল আপলোড করুন</td>
                </tr>

            </tbody>
        </table>
    </div>

    {{-- Page 6  --  Pdf 6 --}}
    <div id="page-6" class="py-5">
        <div class="fs-6 fw-bold mb-2 blue">
            ৬ । মামলা সংক্রান্ত তথ্য
        </div>
        <table class=" table table-bordered border-dark text">
            <tr class="">
                <td class="width4">আদালত এর নাম</td>
                <td class="width1">:</td>
                <td class="width5"></td>
                <td class="width1">></td>
            </tr>

            <tbody class="">
                <tr>
                    <td>প্রত্যর্পন মামলা নম্বর</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>প্রত্যর্পন মামলা তারিখ</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>তফসীল</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>রেকর্ড (খতিয়ানের ধরন)</td>
                    <td>:</td>
                    <td></td>
                    <td>></td>
                </tr>

                <tr>
                    <td>খতিয়ান নম্বর</td>
                    <td>:</td>
                    <td></td>
                    <td>+</td>
                </tr>

                <tr>
                    <td>দাগ নং</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>শ্রেণী *</td>
                    <td>:</td>
                    <td>পরিমাণ (একর)</td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td>></td>
                    <td>০০.০০০</td>
                    <td>+</td>
                </tr>

                <tr>
                    <td></td>
                    <td>></td>
                    <td></td>
                    <td>+</td>
                </tr>

                <tr>
                    <td>সর্বশেষ অবস্থা</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>আদেশের তারিখ</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>ভিপি/ইপি কেস নম্বর</td>
                    <td>:</td>
                    <td></td>
                    <td>></td>
                </tr>

                <tr>
                    <td>ভিপি/ইপি কেস তারিখ</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>রিট মামলা নম্বর</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>বর্তমান অবস্থা</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>দেওয়ানী মামলা নং</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>আদালত কর্তৃক আবেদিত অবমুক্তকৃত ভূমির বিষয়ে নিষেধাজ্ঞা আছে কিনা?</td>
                    <td>:</td>
                    <td>হ্যাঁ / না</td>
                    <td></td>
                </tr>

                <tr>
                    <td>আবেদিত ভূমিতে ইতোপূর্বে অবমুক্ত হয়েছে কিনা?</td>
                    <td>:</td>
                    <td>হ্যাঁ / না</td>
                    <td></td>
                </tr>

            </tbody>

        </table>

        <!-- Table 2nd part -->
        <div class="fs-6 fw-bold mt-4 mb-1">
            আপলোড <span class="blue">(সংযুক্তি প্রদান করুন)</span>
        </div>
        <table class=" table table-bordered border-dark text">
            <tr class="">
                <th class="width2">ক্রমিক</th>
                <th class="width4">প্রয়োজনীয় কাগজ পত্রের নাম</th>
                <th class="width3">ফাইল আপলোড করুন</th>
            </tr>

            <tbody class="">
                <tr>
                    <td>১</td>
                    <td>লিজি/ইজারাদারগণের জাতীয় পরিচয় পত্র</td>
                    <td class="blue">ফাইল আপলোড করুন</td>
                </tr>

                <tr>
                    <td>২</td>
                    <td>লিজি/ইজারাদারগণের ছবি</td>
                    <td class="blue">ফাইল আপলোড করুন</td>
                </tr>

                <tr>
                    <td>৩</td>
                    <td>অন্যান্য</td>
                    <td class="blue">ফাইল আপলোড করুন</td>
                </tr>

            </tbody>
        </table>

        <!-- Table 3rd part -->
        <div class="fs-6 fw-bold mt-4 mb-1">
            আপলোড <span class="blue">(গুগোল ম্যাপ লোকেশন)</span>
        </div>
        <table class=" table table-bordered border-dark text" style="margin-bottom: 4px;">
            <tr class="">
                <td class="width3">অক্ষাংশ (Latitude)</td>
                <td class="width4 blue">আপলোড করুন</td>
            </tr>

            <tbody class="">
                <tr>
                    <td>দ্রাঘিমাংশ (Longitude)</td>
                    <td class="blue">আপলোড করুন</td>
                </tr>
            </tbody>

        </table>
        <div style="font-size: 15px;">গুগল ম্যাপে অর্পিত সম্পত্তির লোকেশন যুক্ত করতে পাশের বাটনে ক্লিক করুন</div>
    </div>

</body>

</html>
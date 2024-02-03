<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style>
        @font-face {
            font-family: Mangal ;
            src: url('{{ public_path('admin/fonts/Mangal.ttf') }}') format('truetype');
        }


        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
        }

        img {
            border-style: none;
        }


        body,
        html {
            font-family: Mangal, sans-serif;
            font-size: 14px;
            font-weight: 500;
            line-height: 1.6em;
            color: #111;
            overflow-x: hidden;
            background-color: #f5f6fa;
        }

        div {
            margin-top: 0;
            line-height: 1.5em;
        }

        img {
            border: 0;
            max-width: 100%;
            height: auto;
            vertical-align: middle;
        }


        table {
            width: 100%;
            caption-side: bottom;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            border: 2px solid #475569;
            background: #e5e7eb;
            font-weight: 500;
        }

        td {
            border: 2px solid #475569;
        }

        td {
            padding: 8px 10px;
            line-height: 1.55em;
        }

        th {
            padding: 4px 10px;
            line-height: 1.55em;
        }


        .tm_semi_bold {
            font-weight: 600;
        }

        .tm_width_1 {
            width: 8.33333333%;
        }

        .tm_width_2 {
            width: 16.66666667%;
        }

        .tm_width_3 {
            width: 25%;
        }

        .tm_container {
            max-width: 750px;
            padding: 30px 10px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            min-height: 100vh;
        }

        .tm_text_center {
            text-align: center;
        }

        .tm_table_responsive {
            overflow-x: auto;
        }

        .tm_table_responsive > table {
            min-width: 600px;
        }

        .tm_invoice {
            background: #fff;
            border-radius: 10px;
            padding: 50px;
        }

        .tm_invoice.tm_style1.tm_type1 {
            padding: 0 20px 20px;
            position: relative;
            overflow: hidden;
            border-radius: 0;
        }

        .tm_invoice_wrap {
            position: relative;
        }

        table .tm_semi_bold {
            font-weight: 600;
            font-size: 13px;
        }

        table tr {
            font-size: 15px;
        }
    </style>
</head>


<body>
<div class="tm_container">
    <div class="tm_invoice_wrap">
        <div class="tm_invoice tm_style1 tm_type1" id="tm_download_section">

            <div style="width:100%"><img src="{{ public_path('admin/images/top.png') }}" alt="Logo"></div>


            <div class="tm_table tm_style1">
                <div class="">
                    <div class="tm_table_responsive">
                        <table>
                            <thead>
                            <tr>
                                <th rowspan="3" class="tm_width_1 tm_semi_bold ">{{ mb_convert_encoding('अ.क्र', 'UTF-8', 'auto') }}</th>
                                <th rowspan="3" class="tm_width_3 tm_semi_bold">{{ mb_convert_encoding('शेतमाल', 'UTF-8', 'auto') }}</th>
                                <th rowspan="3" class="tm_width_1 tm_semi_bold">{{ mb_convert_encoding('एकूण आवक', 'UTF-8', 'auto') }} <br> ({{ mb_convert_encoding('क्विंटल मध्ये', 'UTF-8', 'auto') }})
                                </th>
                                <th colspan="2" class="tm_width_3 tm_semi_bold tm_text_center">{{ mb_convert_encoding('बाजार भाव', 'UTF-8', 'auto') }}</th>
                            </tr>
                            <tr>
                            </tr>
                            <tr>
                                <th class="tm_width_3 tm_semi_bold">कमीत कमी</th>
                                <th class="tm_width_3 tm_semi_bold"> जास्तीत जास्त</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($priceData as $key => $value)
                                <tr>
                                    <td class="tm_width_1">{{ $key +1 }}</td>
                                    <td class="tm_width_5">{{ mb_convert_encoding($value->product_name, 'UTF-8', 'auto') }}</td>
                                    <td class="tm_width_2">{{ $value->weight }}</td>
                                    <td class="tm_width_5">{{ $value->min_rate }}</td>
                                    <td class="tm_width_5 ">{{ $value->max_rate }}</td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>


            </div>

            <div style="width:100%"><img src="{{ public_path('admin/images/bottom.png') }}" alt="Logo"></div>

        </div>

    </div>
</div>

</body>

</html>

<style>
    @page {
        header: page-header;
        footer: page-footer;
        size: auto;
    }

    body {
        font-family: sans-serif;
        font-size: 14px;
    }

    .arfont {
        font-family: 'sky', Tahoma;
    }

    .enfont {
        font-family: sans-serif;
    }

    h1, h2, h3, h4, h5, h6, th, span, a,p {
        font-family: 'sky', sans-serif;
    }

    .text-center {
        display: block;
        text-align: center;
    }

    hr {
        color: #b3b3b3;
        /*font-family: 'sky', tahoma ,sans-serif;*/
    }

    #datatable, #datatable td, #datatable th {
        border-collapse: collapse;
        padding: 10px 8px;
        border: 1px solid #b3b3b3;
        font-family: 'sky', sans-serif;
    }

    #datatable td {
        padding: 5px;
    }

    /*#page {*/
    /*!*height: 2000px !important;*!*/
    /*!*padding-top: 100px;*!*/
    /*}*/

    .bold_font {
        font-weight: 600;
        background-color: #eeeeee;
    }

    .imgMap {
        border: 2px solid #eee;
    }

    .red {
        color: red;
    }
    .green {
        color:green;
    }
    .blue {
        color: blue;
    }
    .grey {
        color: grey;
    }

    .page-border {
        /*border: 1px solid #aeaeae;*/
        /*border-radius: 5px;*/
        height: 100%;
    }

    .page-border-c {
        /*border: 1px solid #aeaeae;*/
        /*border-radius: 5px;*/
        height: 50%;
    }

    #datatable td {
        text-align: center !important;
    }

    /*div.breakNow {*/
        /*page-break-after:always;*/
    /*}*/

    thead { display: table-header-group !important;}
    tfoot { display: table-row-group !important; }
    tr { page-break-inside: avoid !important; }
</style>

<body style="direction: rtl">

<htmlpageheader name="page-header">
    <div class="header">
        <table style="width:100%;">
            <tr>
                <td style="padding-top: 30px;text-align: right">
                    <span style="font-weight: 600;">دولة فلسطين</span>
                    <br/>
                    <span style="font-weight: 600;">الإدارة العامة لتسجيل الشركات</span>
                    {{--س ت / 5801008715--}}
                    {{--<br/>--}}
                    {{--ترخيص صناعي رقم/ 411102103947--}}
                    {{--<br/>--}}
                    {{--الرقم الضريبي / 300694398800003--}}
                    {{--<br/>--}}
                </td>
                <td style="padding-top: 30px;text-align: center;vertical-align:bottom">
{{--                    <a href="{{ url('/') }}" style="font-family: 'Ubuntu', Tahoma; color: #00AAB8; text-decoration: none" target="_blank" rel="noreferrer">--}}
                    <img src="{{ file_exists('logoTH.png') ? asset('logoTH.png') : 'https://via.placeholder.com/300.png' }}" width="70" alt="" style="margin-right: 10px;margin-top: 10px;">
                    {{--</a>--}}
                    <br/>
                    {{--<span style="font-family: 'sky';">{{ \Carbon\Carbon::now()->format('H:i  Y/m/d') }}</span>--}}
                </td>
                <td style="padding-top: 30px;">
{{--                    <span style="font-family: 'sky';">{{ \Carbon\Carbon::now()->format('Y/m/d') }}</span>--}}
                    <br/>
                    <span style="text-align:center!important;font-weight: 600;">أمر تحصيل</span>
                </td>
                <td style="padding-top: 30px;text-align: left">
                    <span style="font-family: 'sky';">{{ \Carbon\Carbon::now()->format('d/m/Y') }}</span>
                    <br/>
                    {{--<span style="text-align:center!important;font-weight: 600;">أمر تحصيل</span>--}}
                    <span style="font-weight: 600;">رقم:</span>
                    <span><bdi>{{ "02-49319" }}</bdi></span>
                    {{--<br/>--}}
                    {{--Indus. License / 411102103947--}}
                    {{--<br/>--}}
                    {{--VAT. No /300694398800003--}}
                    {{--<br/>--}}
                    {{--E-Mail: shamsfactory@shams-me.com--}}
                    {{--<br/>--}}
                </td>
                {{--<td style="vertical-align:bottom; text-align:left; margin-bottom:8px; padding-bottom: 10px" dir="rtl">--}}
                {{--@if(isset($report_name))--}}
                {{--<span style="font-family: 'sky';"> {!! $report_name !!}</span>--}}
                {{--<br>--}}
                {{--@endif--}}
                {{--<span style="font-family: 'sky';">تاريخ الإصدار: <strong>{{ \Carbon\Carbon::now()->format('Y-m-d') }}</strong></span>--}}
                {{--<br/>--}}
                {{--<a href="{{ url('/') }}" style="font-family: 'Ubuntu', Tahoma; color: #00AAB8; text-decoration: none" target="_blank" rel="noreferrer">Eshraqa Company</a>--}}
                {{--</td>--}}
            </tr>
        </table>
        {{--<div style="float: right;font-size: 14px;">--}}

        {{--</div>--}}
        {{--<div class="Logo" style="margin-right: 33px;">--}}

        {{--</div>--}}
        {{--<div style="float: left;font-size: 14px;">--}}

        {{--</div>--}}
    </div>
    {{--<div style="clear:both"></div>--}}
</htmlpageheader>

@yield('content')

<htmlpagefooter name="page-footer">
    {{--<div style="color: #b4b4b4; font-size: 12px; direction: ltr; text-align: right;">--}}
        {{--<span style="text-align: left"> {{ date('d-m-Y H:i') }}</span>--}}
        {{--<span style="text-align: right"> / Page {PAGENO}</span>--}}
    {{--</div>--}}
    {{--<br>--}}
</htmlpagefooter>

</body>

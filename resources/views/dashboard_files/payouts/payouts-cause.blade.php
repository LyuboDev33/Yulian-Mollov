<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Кампании</title>

    @include('dashboard_files.inc.head')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        
        @include('dashboard_files.inc.sidebar')

        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('dashboard_files.inc.header')
            <!--  Header End -->
            <div class="container-fluid">
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="card w-100">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-semibold mb-4">Секция - Payout от налични дарения</h5>
                            <h3 style="color: red;">Моля прочетете задължително информацията.</h3>
                            <p>
                            При дарение за дадена кауза, всеки потребител има възможността да остави определен % за платформата.
                            </p>
                            В случай че в Stripe сте изтеглили пари (направили сте Payout), които трябва да бъдат дадени на конкретна фондация, изберете фондацията от падащото меню и напишете попълнете необходимите данни за нея.
                           
                            <ol>
                                <li>Основание на плащането</li>
                                <li>Основание на дс</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row campaign-table">

                    @if (!empty($campaigns))
          
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Имена</th>
                                    <th>Имейл</th>
                                    <th>Причина</th>
                                    <th>Действие</th>
                                    <th>Статус</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($campaigns as $campaign)
                                    <tr>
                                        <td>{{ $campaign->name }}</td>
                                        <td>{{ $campaign->email }}</td>
                                        <td>{{ $campaign->treatment }}</td>
                                        <td>
                                            <a href="/dashboard/campaigns/{{ $campaign->id }}"
                                                class="btn btn-primary">Към кампанията</a>
                                        </td>
                                        <td>
                                            <button class="status"
                                                type="submit">{{ $campaign->status }}</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

                </div>
            </div>
        </div>

		

        @include('dashboard_files.inc.footer')

</body>

</html>

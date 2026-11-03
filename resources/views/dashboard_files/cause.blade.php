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
                <fieldset class="field-container">
                    <input type="text" placeholder="Потърсете кампания..." class="field" />
                    <div class="icons-container">
                      <div class="icon-search"></div>
                      <div class="icon-close">
                        <div class="x-up"></div>
                        <div class="x-down"></div>
                      </div>
                    </div>
                  </fieldset>

                <div class="row campaign-table">
                    <h4 class="mt-20">Това е списък от хора, които са готови да пуснат кампания.</h4>

                    @if (!empty($all_active_causes))

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Име на кампания</th>
                                    <th>Желана сума</th>
                                    <th>Събрана сума</th>
                                    <th>Имейл</th>
                                    <th>Действие</th>
                                    <th>Статус</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_active_causes as $cause)
                                    <tr>
                                        <td>{{ $cause->cause_name }}</td>
                                        <td>{{ number_format( (float) $cause->cause_desired_amount, 2, '.') }}  EUR</td>
                                        <td>{{ number_format( (float) $cause->cause_amount_collected, 2, '.') }}  EUR</td>
                                        <td>{{ $cause->email }}</td>
                                        <td>
                                            <a href="/dashboard/causes/{{ $cause->id }}"
                                                class="btn btn-primary">Виж детайли</a>
                                        </td>
                                        <td>
                                            <button class="status">
                                            @if(empty($cause->campaign_status))
                                                Изчаква одоборение
                                            @elseif ($cause->campaign_status === "not_active")
                                                Спряна

                                            @elseif ($cause->campaign_status === "cause_active")
                                                Активна
                                            @endif
                                            </button>
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

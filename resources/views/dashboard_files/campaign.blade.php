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

@extends('tablar::page')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        DWS
                    </div>
                    <h2 class="page-title">
                        Dashboard
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ url('/generate-pdf') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Crear reportes
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Page body -->
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Entradas</h3>
                        </div>
                        <div class="card-body">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                    <!-- Encabezados de la tabla -->
                                    <tr>
                                        <th>No.</th>
                                        <th>Tipo Entrada</th>
                                        <th>Monto Entrada</th>
                                        <th>Fecha</th>
                                        <th>Factura</th>
                                        <!-- ... Otros encabezados si es necesario -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($entradas as $entrada)
                                        <tr>
                                            <td>{{ $entrada->id }}</td>
                                            <td>{{ $entrada->tipo_entrada }}</td>
                                            <td>{{ $entrada->monto_salida }}</td>
                                            <td>{{ $entrada->fecha }}</td>
                                            <td>{{ $entrada->factura }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">No hay datos de entradas</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Salidas</h3>
                        </div>
                        <div class="card-body">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                    <!-- Encabezados de la tabla -->
                                    <tr>
                                        <th>No.</th>
                                        <th>Tipo Salida</th>
                                        <th>Monto Salida</th>
                                        <th>Fecha Salida</th>
                                        <th>Factura Salida</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($salidas as $salida)
                                        <tr>
                                            <td>{{ $salida->id }}</td>
                                            <td>{{ $salida->tipo_salida }}</td>
                                            <td>{{ $salida->monto_salida }}</td>
                                            <td>{{ $salida->fecha_salida }}</td>
                                            <td>{{ $salida->factura_salida }}</td>
                                            <!-- ... Otros datos si es necesario -->
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">No hay datos de salidas</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- Calcular el balance total -->
            <?php
            $totalMontoEntrada = $entradas->sum('monto_salida');
            $totalMontoSalida = $salidas->sum('monto_salida');
            $balanceTotal = $totalMontoEntrada - $totalMontoSalida;
            ?>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Balance Total:</h3>
                        </div>
                        <div class="card-body">
                            <h3>Total de Monto Entrada: {{ $totalMontoEntrada }}</h3>
                            <h3>Total de Monto Salida: {{ $totalMontoSalida }}</h3>
                            <hr>
                            <h1>Balance Total:${{ $balanceTotal }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="width: 75%; height: 35%; margin: 0 auto; border: 1px solid #ccc; padding: 10px;">
        <h1 style="margin-left:35%">Grafico de balances mensual</h1>
        <canvas id="graficoPastel" style="margin: auto;"></canvas>
    </div>
    

    
    
    <script>
        var totalMontoEntrada = <?php echo $totalMontoEntrada; ?>;
        var totalMontoSalida = <?php echo $totalMontoSalida; ?>;
    
        var data = {
            labels: ['Entradas', 'Salidas'],
            datasets: [{
                data: [totalMontoEntrada, totalMontoSalida],
                backgroundColor: ['#36A2EB', '#FF6384'],
                hoverBackgroundColor: ['#36A2EB', '#FF6384']
            }]
        };
        var ctx = document.getElementById('graficoPastel').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: data
        });
    </script>
    
@endsection

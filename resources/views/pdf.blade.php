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
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($entradas as $entrada)
                                        <tr>
                                            <td>{{ $entrada->id }}</td>
                                            <td>{{ $entrada->tipo_entrada }}</td>
                                            <td>{{ $entrada->monto_salida }}</td>
                                            <td>{{ $entrada->fecha }}</td>
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
                </div><br><hr><br>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($salidas as $salida)
                                        <tr>
                                            <td>{{ $salida->id }}</td>
                                            <td>{{ $salida->tipo_salida }}</td>
                                            <td>{{ $salida->monto_salida }}</td>
                                            <td>{{ $salida->fecha_salida }}</td>
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
                <div class="card"><br><br><br>
                    <hr>
                    <div class="card-header">
                        <h3 class="card-title">Balance Total:</h3>
                    </div><hr>
                    <div class="card-body">
                        <h3>Total de Monto Entrada: ${{ $totalMontoEntrada }}</h3>
                        <h3>Total de Monto Salida: ${{ $totalMontoSalida }}</h3>
                        <hr>
                        <h1>Balance Total: ${{ $balanceTotal }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

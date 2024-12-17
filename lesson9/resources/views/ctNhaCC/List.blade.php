<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <header class="container my-3">
        <h1>Danh Sach Nha Cung Cap</h1>
    </header>
    <section class="container my-3 border p-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>So TT</th>
                    <th>Ma Nha Cung Cap</th>
                    <th>Ten Nha Cung Cap</th>
                    <th>Dia Chi</th>
                    <th>So DT</th>
                    <th>Chuc Nang</th>
                </tr>
            </thead>
            <tbody>
                
                @php
                $stt=1;
                @endphp
                @forelse($ctNhaCCs as $item)
                
                

                    <tr>
                        <td>{{$loop->iteration+($ctNhaCCs->currentPage()-1)*$ctNhaCCs->perPage()}}</td>
                        <td>{{$item->MaNCC}}</td>
                        <td>{{$item->TenNCC}}</td>
                        <td>{{$item->Diachi}}</td>
                        <td>{{$item->Dienthoai}}</td>
                        <td>Xem/Sua/Xoa</td>
                    </tr>
                @empty
                <tr>
                    <td colspan="7">Chua Co Du Lieu</td>
                </tr>    
                @endforelse
                 
            </tbody>
            
        </table>
        <tr>
                      {{$ctNhaCCs->links('pagination::bootstrap-5')}}
        </tr>  
        <button class="btn btn-primary">Them Moi</button>
    </section>
</body>
</html>
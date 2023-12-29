@extends('welcome')
@section('title', 'Корзина')
@section('content')



    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                @if(!$products)
                    <div class="col-12">
                        <h2>Ваша корзина пуста, <a href="{{ route('catalog') }}">перейти к покупкам</a> </h2>
                    </div>
                @else
                    @if(session()->has('error_password_order'))
                        <div class="alert alert-danger">Неверный пароль</div>
                    @endif
                        @if(session()->has('basket_add_success'))
                            <div class="alert alert-success">Вы успешно добавили товар</div>
                        @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">Названия товаров</th>
                                <th></th>
                                <th>Цена</th>
                                <th>Количество</th>
                                <th>Стоимость</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                        @foreach($products as $product)
                            <tr>
                                <td>
                                    <img src="{{ asset('/storage/app/public/'.$product->product_photo) }}" class="d-block w-100" alt="фото товара">
                                </td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_price }}</td>
                                <td>
                                    <div class="d-flex">
                                        <form action="{{ route('basket.remove', $product) }}" method="POST" class="me-2">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">-</button>
                                        </form>
                                        {{ $product->count }}
                                        <form action="{{ route('basket.add', $product) }}" method="POST" class="ms-2">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-success">+</button>
                                        </form>
                                    </div>
                                </td>
                                <td>{{ $product->sumPrice }}</td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between">
                        <h5>Итого: {{$basketSum}}</h5>
                        <div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"  data-bs-target="#confirmOrderModal">
                                Оформить заказ
                            </button>

                        </div>
                    </div>
                @endif
            </div>
            <div class="col"></div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="confirmOrderModal" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Подтверждение заказа</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('order.create') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="password" class="form-label">Введите пароль</label>
                            <input type="password" class="form-control" id="password" name="category_name">

                        </div>
                        <div class="modal_footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                            <button type="submit" class="btn btn-primary">Сформировать заказ</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

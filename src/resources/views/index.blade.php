@extends('layouts.app')


@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="todo__record">
    <div class="todo__record__suc">
        Todoを作成しました
    </div>
</div>

<div class="todo__content">
    <form class="todo-form">
        <div class="todo-form__item">
            <input type="text" class="item-create"
            name="content">
        </div>
        <div class="create__button">
            <button class="create-confirm" type="submit">作成</button>
        </div>
    </form>
    <div class="todo-table">
        <table class="todo-table__inner">
            <tr class="todo-table__row">
                <th class="todo-table__header">Todo</th>
            </tr>
            <tr class="todo-table__row">
                <td class="todo-table__item">
                    <form class="form-update">
                        <div class="form-update__item">
                            <input type="text" class="form-update__item-input"value="test">
                        </div>
                        <div class="form-update__button">
                            <button class="form-update__button-confirm" type="submit">更新</button>
                        </div>
                    </form>
                </td>
                <td class="todo-table__item">
                    <form class="form-delete">
                        <div class="form-delete__button">
                            <button class="form-delete__button-confirm" type="submit">
                            </button>
                        </div>
                    </form>
                </td>
            </tr>
            <tr class="todo-table__row">
                <td class="todo-table__item">
                    <form class="form-update">
                        <div class="form-update__item">
                            <input type="text" class="form-update__item-input"value="test2">
                        </div>
                        <div class="form-update__button">
                            <button class="form-update__button-confirm" type="submit">更新</button>
                        </div>
                    </form>
                </td>
                <td class="todo-table__item">
                    <form class="form-delete">
                        <div class="form-delete__button">
                            <button class="form-delete__button-confirm" type="submit">
                            </button>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>















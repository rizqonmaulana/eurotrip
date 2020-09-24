@extends('layouts.app')

@section('title')
    Checkout
@endsection

@section('content')
<main>
<section class="section-details-header mt-1"></section>
<section class="section-details-content checkout">
    <div class="container">
    <div class="row">
        <div class="col p-0">
        <nav
            style="
            background-color: #fff;
            line-height: 30px;
            border-radius: 5px;
            "
        >
            <ol class="breadcrumb">
            <li class="breadcrumb-item">Paket Travel</li>
            <li class="breadcrumb-item">Details</li>
            <li class="breadcrumb-item active">
                <span class="red">Checkout</span>
            </li>
            </ol>
        </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 pl-lg-0">
        <div class="card card-details">
            <h1>Who are Going ?</h1>
            <p>Trip to Ubud, Bali, Indonesia</p>
            <div class="attendee">
            <table class="table table-responsive-sm text-center">
                <thead>
                <td>Picture</td>
                <td>Name</td>
                <td>Nationality</td>
                <td>Visa</td>
                <td>Passport</td>
                <td></td>
                </thead>
                <tbody>
                <tr>
                    <td>
                    <img src="{{ url('frontend/images/avatar-1.png') }}" height="60" />
                    </td>
                    <td class="align-middle">Rizqon Maulana</td>
                    <td class="align-middle">ID</td>
                    <td class="align-middle">N/A</td>
                    <td class="align-middle">Active</td>
                    <td class="align-middle">
                    <a href="">
                        <img src="{{ url('frontend/images/ic_remove.png') }}" alt="" />
                    </a>
                    </td>
                </tr>
                <tr>
                    <td>
                    <img src="{{ url('frontend/images/avatar-2.png') }}" height="60" />
                    </td>
                    <td class="align-middle">Galih Pratama</td>
                    <td class="align-middle">JP</td>
                    <td class="align-middle">30 Days</td>
                    <td class="align-middle">Active</td>
                    <td class="align-middle">
                    <a href="">
                        <img src="{{ url('frontend/images/ic_remove.png') }}" alt="" />
                    </a>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
            <div class="member mt-3">
            <h2>Add Member</h2>
            <form class="form-inline">
                <label for="inputUsername" class="sr-only">Name</label>
                <input
                type="text"
                class="form-control mb-2 mr-sm-2"
                id="inputUsername"
                placeholder="Username"
                />

                <label for="inputVisa" class="sr-only">Visa</label>
                <select
                name="inpuVIsa"
                id="inputVisa"
                class="custom-select mb-2 mr-sm-2"
                >
                <option value="VISA" selected>VISA</option>
                <option value="30 Days">30 Days</option>
                <option value="N/A">N/A</option>
                </select>

                <label for="doePassport" class="sr-only"
                >DOE Passport</label
                >
                <div class="input-group mb-2 mr-sm-2">
                <input
                    type="text"
                    class="form-control datepicker"
                    id="doePassport"
                    placeholder="DOE Passport"
                />
                </div>

                <button type="submit" class="btn btn-add-now mb-2 px-4">
                Add Now
                </button>
            </form>
            <h3 class="mt-2 mb-0">Note</h3>
            <p class="disclaimer mb-0">
                Your are the only able to invite member that has registered
                in Nomads.
            </p>
            </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="card card-details card-right">
            <h2>Checkout Informations</h2>
            <table class="trip-informations">
            <tr>
                <th width="50%">Members</th>
                <td width="50%" class="text-right">2 Person</td>
            </tr>
            <tr>
                <th width="50%">Additional Visa</th>
                <td width="50%" class="text-right">$ 190,00</td>
            </tr>
            <tr>
                <th width="50%">Trip Price</th>
                <td width="50%" class="text-right">$ 80,00 / Person</td>
            </tr>
            <tr>
                <th width="50%">Sub Total</th>
                <td width="50%" class="text-right">$ 280,00</td>
            </tr>
            <tr>
                <th width="50%">Total (+Unique Code)</th>
                <td width="50%" class="text-right">
                <span class="text-blue">$ 279,</span>
                <span class="text-orange">33</span>
                </td>
            </tr>
            </table>
            <hr />
            <h2>Paymen Intructions</h2>
            <p class="payment-instructions">
            Please complete your payment before to continue the wonderful
            trip
            </p>
            <br />
            <div class="bank">
            <div class="bank-item pb-3">
                <img
                src="{{ url('frontend/images/ic_bank.png') }}"
                alt=""
                class="bank-image"
                />
                <div class="description">
                <h3>PT Nomads ID</h3>
                <p>
                    0080 2219 9013
                    <br />
                    Bank Central Asia
                </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="bank-item pb-3">
                <img
                src="{{ url('frontend/images/ic_bank.png') }}"
                alt=""
                class="bank-image"
                />
                <div class="description">
                <h3>PT Nomads ID</h3>
                <p>
                    1892 2145 5555
                    <br />
                    Mandiri
                </p>
                </div>
                <div class="clearfix"></div>
            </div>
            </div>
        </div>
        <div class="join-container">
            <a href="{{ route('checkout-success') }}" class="btn btn-block btn-join-now mt-3 py-2">
            I Have Made Payment
            </a>
        </div>
        <div class="text-center mt-3">
            <a href="" class="text-muted"> Cancel Booking </a>
        </div>
        </div>
    </div>
    </div>
</section>
</main>
@endsection

@push('prepend-style-datepicker')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}" />
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}" />
@endpush


@push('addon-script-datepicker')
<script src=" {{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script src=" {{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
<script>
  $(document).ready(function () {
    $(".xzoom, .xzoom-gallery").xzoom({
      zoomWidth: 450,
      zoomHeight: 300,
      title: false,
      tint: "#333",
      Xoffset: 15,
    });

    $(".datepicker").datepicker({
      uiLibrary: "bootstrap4",
      icons: {
        rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />',
      },
    });
  });
</script>
@endpush

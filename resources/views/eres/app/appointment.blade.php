@extends('layouts.default')

@section('content')
<div class="container-fluid">
    <div class="form-head d-flex mb-3 mb-md-4 align-items-center">
        <div class="input-group search-area d-inline-flex me-2">
            <input type="text" class="form-control" placeholder="Search here">
            <div class="input-group-append">
                <button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
            </div>
        </div>
        <div class="ms-auto">
            <a href="javascript:void(0);" class="btn btn-primary btn-rounded add-appointment" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Book Appointment</a>
            <a href="{{url('doctor-list')}}" class="btn btn-primary btn-rounded">Doctor Schedule</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table id="example5" class="table table-striped patient-list mb-4 dataTablesCard fs-14">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </div>
                                    </th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date Of Appointment</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Mobile</th>
                                    <th>Consulting Doctor</th>
                                    <th>Injury/Condition</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
                                                <label class="form-check-label" for="customCheckBox1"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{asset('images/avatar/1.jpg')}}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">Matthew</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Fever</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                                <label class="form-check-label" for="customCheckBox2"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{asset('images/avatar/2.jpg')}}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">JOHN D RANDOLPH</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Fever</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
                                                <label class="form-check-label" for="customCheckBox3"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{asset('images/avatar/3.jpg')}}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">JOHN D RANDOLPH</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Acne</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
                                                <label class="form-check-label" for="customCheckBox4"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{asset('images/avatar/4.jpg')}}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">Asher Anthony</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Anaphylaxis</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox8" required="">
                                                <label class="form-check-label" for="customCheckBox8"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{asset('images/avatar/6.jpg')}}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">Carter Anthony</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Angioedema</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox7" required="">
                                                <label class="form-check-label" for="customCheckBox7"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{asset('images/avatar/4.jpg')}}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">David Anthony</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Anxiety</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox6" required="">
                                                <label class="form-check-label" for="customCheckBox6"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{asset('images/avatar/6.jpg')}}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">Anthony David</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Arthritis</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
                                                <label class="form-check-label" for="customCheckBox1"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{asset('images/avatar/1.jpg')}}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">Matthew</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Fever</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                                <label class="form-check-label" for="customCheckBox2"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{asset('images/avatar/2.jpg')}}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">JOHN D RANDOLPH</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Fever</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
                                                <label class="form-check-label" for="customCheckBox3"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{asset('images/avatar/3.jpg')}}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">JOHN D RANDOLPH</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Acne</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
                                                <label class="form-check-label" for="customCheckBox4"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{asset('images/avatar/4.jpg')}}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">Asher Anthony</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Anaphylaxis</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox8" required="">
                                                <label class="form-check-label" for="customCheckBox8"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{asset('images/avatar/6.jpg')}}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">Carter Anthony</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Angioedema</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox7" required="">
                                                <label class="form-check-label" for="customCheckBox7"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{asset('images/avatar/4.jpg')}}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">David Anthony</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Anxiety</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox text-end align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox6" required="">
                                                <label class="form-check-label" for="customCheckBox6"></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="patient-info ps-0">
                                        <span>
                                            <img src="{{asset('images/avatar/6.jpg')}}" alt="">
                                        </span>
                                        <span class="text-nowrap ms-2">Anthony David</span>
                                    </td>
                                    <td class="text-primary">gabriel@gmail.com</td>
                                    <td>8 Aug 2021</td>
                                    <td>12:00</td>
                                    <td>13:00</td>
                                    <td class="text-primary">9876512345</td>
                                    <td>Dr. HANI B BARADI</td>
                                    <td>Arthritis</td>
                                    <td>
                                        <span class="me-3">
                                        <a href="javascript:void(0);" class="edit-appointment"><i class="fa fa-pencil fs-18 " aria-hidden="true"></i></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-trash fs-18 text-danger" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    (function($) {

        var table = $('#example5').DataTable({
            searching: false,
            paging:true,
            select: false,
            //info: false,
            lengthChange:false

        });
        $('#example tbody').on('click', 'tr', function () {
            var data = table.row( this ).data();

        });

    })(jQuery);

    jQuery('#datetimepicker2').datetimepicker({
        datepicker:false,
        format:'H:i'
    });
</script>

@endpush
@push('modals')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Book Appointment</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          <form>
            @csrf
          <div class="row">
              <div class="col-xl-12">
                  <div class="form-group">
                      <label  class="col-form-label">Title:</label>
                      <select class="form-control">
                        <option>Miss</option>
                         <option>Mr.</option>
                          <option>Mrs.</option>
                      </select>
                   </div>
              </div>
              <div class="col-xl-6">
                  <div class="form-group">
                      <label class="col-form-label">Name:</label>
                       <input type="text" class="form-control" id="name1" placeholder="Name">
                  </div>
              </div>
              <div class="col-xl-6">
                  <div class="form-group">
                      <label class="col-form-label">Last Name:</label>
                       <input type="text" class="form-control" id="name2" placeholder="Last Name">
                  </div>
              </div>
              <div class="col-xl-12">
                  <div class="form-group">
                      <label class="col-form-label">Date Of Appointment:</label>
                      <input size="16" type="date"  class="form-control">
                  </div>
              </div>
              <div class="col-xl-6">
                  <label class="form-label mt-3">Form<span class="text-danger">*</span></label>
                  <div class="input-group clockpicker">
                      <input type="text" class="form-control" value="09:30"><span class="input-group-text"><i
                                  class="fas fa-clock"></i></span>
                  </div>
              </div>
              <div class="col-xl-6">
                  <label class="form-label mt-3">To<span class="text-danger">*</span></label>
                  <div class="input-group clockpicker">
                      <input type="text" class="form-control" value="10:30"><span class="input-group-text"><i
                                  class="fas fa-clock"></i></span>
                  </div>
              </div>
              <div class="col-xl-12">
                  <div class="form-group">
                      <label  class="col-form-label">Address :</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
              </div>
              <div class="col-xl-6">
                  <div class="form-group">
                      <label  class="col-form-label">Mobile No:</label>
                       <input type="number" class="form-control" id="moblie1" placeholder="Mobile">
                  </div>
              </div>
              <div class="col-xl-6">
                  <div class="form-group">
                      <label class="col-form-label">Email Id:</label>
                       <input type="email" class="form-control" id="email1" placeholder="Email">
                  </div>
              </div>
              <div class="col-xl-6">
                  <div class="form-group">
                      <label class="col-form-label">Consulting Doctor:</label>
                      <select class="form-control">
                        <option>Dr.HANI B BARADI</option>
                         <option>Dr.NAJJIA N MAHMOUD</option>
                          <option>Dr. SANKAR NAIDU ADUSUMILLI</option>
                      </select>
                  </div>
              </div>
              <div class="col-xl-6">
                  <div class="form-group">
                      <label  class="col-form-label">Injury/Condition:</label>
                       <input type="text" class="form-control" id="fever" placeholder="fever">
                  </div>
              </div>
              <div class="col-xl-12">
                  <div class="form-group">
                      <label  class="col-form-label">Note:</label>
                      <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                  </div>
              </div>
          </div>


          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>
@endpush

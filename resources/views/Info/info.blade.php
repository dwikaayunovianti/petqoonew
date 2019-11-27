@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
    Informasi 
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/view_patient.css') }}" rel="stylesheet">
    {{-- <script src="{{ asset('js/view_patient.js') }}"></script> --}}
@endsection

@section('ContentOfBody')
 {{-- Informasi View --}}
  
             <div class="container">
        <div class=" col-sm-12 pro_head clearfix">
            <h2 class="pull-left"><strong>TIPS and</strong> TRIK</h2>
            <h2 class="pull-right">
                @if(Auth::guard('patient')->check() && Auth::guard('patient')->user()->id == $Personal->id )
                    <a href="{{ route('PatientEdit')}}" data-toggle="tooltip" data-placement="bottom" title="Edit"><span
                                class="glyphicon glyphicon-edit"></span></a>
                @endif
            </h2>
        </div>
  
        <div class="col-sm-3" align="left">
            <img src="image/persia.jpg" class="img-thumbnail" alt="Profile Pic" width="210" height="210">
           
        </div>
       
            <div class="pro-info">
            <td><strong>Cara Merawat Kucing Persia</strong></td>
            <br>
            <td>Kali ini saya akan membahas cara merawat kucing persia. Sebenarnya sih susah susah gampang merawat kucing ini.
1. Kucing ini memiliki bulu yang agak panjang, kita harus sering sering menyisir agar bulunya tidak menggimbal. Apabila bulu panjang boleh dipotong agar tidak terlalu lebat.
2. Potong Kuku bila sudah panjang. Karena bisa melukai orang lain.
3. Rutin lah mandikan kucing ini misalnya 1 bulan 2x.
4. Beri makan yang khusus. Biasanya Sereal maupun Ikan Olahan khusus kucing
5. Pastikan Luangkan waktu untuk bermain dengan kucing ini. apabila dikandang terus akan cenderung stes.
6. Kita harus mempunyai tempat pembuangan khusus. karena kucing ini tidak mau buang kotoran semaunya.

Sekian Tips dari saya yang mungkin bermanfaat.</td>
                
                </table>
            </div>

            <br>

            <div class="container">
        <div class=" col-sm-12 pro_head clearfix">
            <h2 class="pull-left"><strong>Kesehatan</strong> Anabul</h2>
            <h2 class="pull-right">
                @if(Auth::guard('patient')->check() && Auth::guard('patient')->user()->id == $Personal->id )
                    <a href="{{ route('PatientEdit')}}" data-toggle="tooltip" data-placement="bottom" title="Edit"><span
                                class="glyphicon glyphicon-edit"></span></a>
                @endif
            </h2>
        </div>
  
        <div class="col-sm-3" align="left">
            <img src="image/anjing.jpg" class="img-thumbnail" alt="Profile Pic" width="250" height="250">
           
        </div>
       
            <div class="pro-info">
            <td><strong>Cek kesehatan Anabul</strong></td>
            <br>
            <td>Yuk parent perhatikan kesehatan anabulnya 1 : Periksa berat badan

Untuk anjing anakan sebaiknya pengecekan berat badan dilakukan satu minggu sekali, sedangkan untuk anjing dewasa cukup satu bulan sekali. Anjing yang sehat harus memiliki berat badan yang ideal, cara mengetahui berat badan yang ideal adalah dengan meraba bagian tulang iganya. Jika tulang iga tidak terasa ketika disentuh oleh jari maka anjing anda kegemukan. Jika tulang iga terlihat dengan mata berarti anjing anda terlalu kurus. Yang terbaik adalah ketika anda meraba bagian iga dengan sedikit tekanan maka akan terasa bagian tulangnya.

Poin 2 : Periksa kondisi bulu dan kulit

Bulu harus terasa lembut dari bagian kepala hingga ekor. Kulit harus bebas dari ketombe, ruam</td>
                
                </table>
            </div>  

            <br>

            <div class="container">
        <div class=" col-sm-12 pro_head clearfix">
            <h2 class="pull-left"><strong>Nutrisi dan</strong> Pakan</h2>
            <h2 class="pull-right">
                @if(Auth::guard('patient')->check() && Auth::guard('patient')->user()->id == $Personal->id )
                    <a href="{{ route('PatientEdit')}}" data-toggle="tooltip" data-placement="bottom" title="Edit"><span
                                class="glyphicon glyphicon-edit"></span></a>
                @endif
            </h2>
        </div>
  
        <div class="col-sm-3" align="left">
            <img src="image/kelinci.jpg" class="img-thumbnail" alt="Profile Pic" width="210" height="210">
           
        </div>
       
            <div class="pro-info">
            <td><strong>10 Makanan Kelinci yang Sehat dan Bernutrisi</strong></td>
            <br>
            <td>Siapa tidak suka melihat seekor kelinci yang lucu? Kami rasanya semua orang pasti menyukai kelinci. Mungkin awalnya kamu berpikir bahwa kelinci adalah binatang peliharaan yang biasanya dipelihara oleh anak-anak. Namun sejak banyak bermunculannya kelinci hias, kini hobi memelihara kelinci pun sudah menyebar ke orang dewasa. Bahkan harga kelinci pun melonjak dengan drastis, bisa menyentuh jutaan rupiah.

Sudah pasti kamu menginginkan makanan yang sehat dan bernutrisi untuk kelinci kesayangan kamu. Kamu tidak boleh asal-asalan dalam memberikan makanan kelinci. Namun tidak sedikit anggapan yang menyebutkan bahwa kamu bisa memberi makanan apa saja untuk kelinci peliharaan, yang penting makanan tersebut alami. Sebetulnya anggapan seperti itu tidak salah, namun alangkah lebih baiknya jika kamu juga memilah makanan kelinci yang sehat dan bergizi. Simak penjelasannya di sini.</td>
                
                </table>
            </div>

           

</div>
    
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $dog->callName }}'s Pedigree</title>
    <link rel="stylesheet" href="{{ asset('css/pedi.css') }}">
</head>
<body>


    <div class="container">
        <div class="Picture"><img class="img" src="{{ asset('images/weblogo.png') }}" ></div>
        <div class="Pedigree">
        <h1>Pedigree of: {{ $dog->regName }} </h1>
       </div>
        <div class="CallName">Call Name:     <strong> {{ $dog->callName }}</strong> </div>
        <div class="Birthday">Date of Birth:    <strong>{{ \Carbon\Carbon::parse($dog->birthday)->format('l jS \of F Y ') }}</strong> </div>
        <div class="Colour">Colour:   <strong>{{ $dog->colour }}</strong></div>
        <div class="Sex">Sex:    <strong> {{ $dog->sex }}</strong>   </div>
        <div class="Footer">
             
        </div>
       
        <div class="Table">
            
                <table class="tg">
                <tbody>
                  <tr>
                    <td class="tg-0lax" rowspan="8">{{ $dog->mped->regName }} </td>
                    <td class="tg-0lax" rowspan="4">{{ $dog->mped->sire }} </td>
                    <td class="tg-0lax" rowspan="2">{{ $dog->mped->sFather }} </td>
                    <td class="tg-0lax">{{ $dog->mped->sfFather }} </td>
                  </tr>
                  <tr>
                    <td class="tg-0lax">{{ $dog->mped->sfMother }} </td>
                  </tr>
                  <tr>
                    <td class="tg-0lax" rowspan="2">{{ $dog->mped->sMother }} </td>
                    <td class="tg-0lax">{{ $dog->mped->smFather }} </td>
                  </tr>
                  <tr>
                    <td class="tg-0lax">{{ $dog->mped->smMother }} </td>
                  </tr>
                  <tr>
                    <td class="tg-0lax" rowspan="4"> {{ $dog->mped->dame }}  </td>
                    <td class="tg-0lax" rowspan="2">{{ $dog->mped->dFather }} </td>
                    <td class="tg-0lax">{{ $dog->mped->dfFather }} </td>
                  </tr>
                  <tr>
                    <td class="tg-0lax">{{ $dog->mped->dfMother }} </td>
                  </tr>
                  <tr>
                    <td class="tg-0lax" rowspan="2">{{ $dog->mped->dMother }} </td>
                    <td class="tg-0lax">{{ $dog->mped->dmFather }} </td>
                  </tr>
                  <tr>
                    <td class="tg-0lax">{{ $dog->mped->dmMother }} </td>
                  </tr>
                  <tr>
                    <td class="tg-02ax">PARENTS</td>
                    <td class="tg-02ax">GRAND PARENTS</td>
                    <td class="tg-02ax">GREAT GRAND PARENTS</td>
                    <td class="tg-02ax">GREAT GREAT GRAND PARENTS</td>
                  </tr>
                
                  <tr>
                    <td class="tg-0lax" rowspan="8">{{ $dog->fped->regName }} </td>
                    <td class="tg-0lax" rowspan="4">{{ $dog->fped->sire }} </td>
                    <td class="tg-0lax" rowspan="2">{{ $dog->fped->sFather }} </td>
                    <td class="tg-0lax">{{ $dog->fped->sfFather }} </td>
                  </tr>
                  <tr>
                    <td class="tg-0lax">{{ $dog->fped->sfMother }} </td>
                  </tr>
                  <tr>
                    <td class="tg-0lax" rowspan="2">{{ $dog->fped->sMother }} </td>
                    <td class="tg-0lax">{{ $dog->fped->smFather }} </td>
                  </tr>
                  <tr>
                    <td class="tg-0lax">{{ $dog->fped->smMother }} </td>
                  </tr>
                  <tr>
                    <td class="tg-0lax" rowspan="4">{{ $dog->fped->dame }} </td>
                    <td class="tg-0lax" rowspan="2">{{ $dog->fped->dFather }} </td>
                    <td class="tg-0lax">{{ $dog->fped->dfFather }} </td>
                  </tr>
                  <tr>
                    <td class="tg-0lax">{{ $dog->fped->dfMother }} </td>
                  </tr>
                  <tr>
                    <td class="tg-0lax" rowspan="2">{{ $dog->fped->dMother }} </td>
                    <td class="tg-0lax">{{ $dog->fped->dmFather }} </td>
                  </tr>
                  <tr>
                    <td class="tg-0lax">{{ $dog->fped->dmMother }} </td>
                  </tr>
                </tbody>
                
                </table>
                
                
                </div>

        </div>
      </div>
      <p class="knawl">"This pedigree is certified true and correct to the best of my knowledge"</p>
</body>
</html>
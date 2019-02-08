@extends('layouts.app')

@section('content')

      <h1>{{$title}}</h1>
      <p>Hier findest du einen Überblick über unser aktuelles Kursangebot.</p>

      @if(count($kursangebot) > 0)
        <br>
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="false">Zumba Fitness</button>
              </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
              <div class="card-body">
                Bist du bereit, dich fit zu TANZEN? Denn genau darum geht es bei ZUMBA&reg;-Fitness! Es ist eine Tanz-Fitnessparty, die jede Menge Kalorien verbrennt und Millionen Menschen in ihren Bann gezogen hat.
                Tanz' einfach mit und lass Dich mitreissen von der Musik, unseren lizenzierten Trainern und der positiven Energie die entsteht wenn wir zusammen Spass haben. Zumba&reg; tanzen erfordert übrigens keinerlei Vorkenntnisse. Jede(r) kann mitmachen. Es gibt keine Pausen in denen wir dir irgendwelche Schritte erklären. Denn deiner Kreativität sind fast keine Grenzen gesetzt. Beweg dich auf die Musik und folge deinem Gefühl dann kommt das Leuchten in den Augen und der "Glitzer" auf deinem Körper von ganz allein. Also rein in die Turnschuhe und ausprobieren!
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">TRX</button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo">
              <div class="card-body">
                Ob neue Bestzeiten, eine gesündere Lebensweise oder körperliche Fitness – TRX&reg; hilft dir, deine Ziele zu erreichen. Mit seiner Variationsvielfalt aus über 300 Übungen werden Kraft-, Koordinations- und Stabilisierungsübungen mit Schlingen und dem eigenen Körpergewicht zu motivierender Musik ausgeführt. An 26 TRX&reg;-Trainingsplätzen kannst du erleben wie Training in der Gruppe dich beflügeln wird. Durch die kompetenten Trainer ist gewährleistet, dass die Übungen korrekt ausgeführt werden. Du kannst selbst steuern wie intensiv du dein Training gestaltest, also probier es einfach aus. Es gibt nichts zu verlieren, ausser ein paar Kalorien!
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Bauch, Beine, Po</button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree">
              <div class="card-body">
                Der Klassiker: dieses Workout trainiert die Bereiche, die Dir wirklich wichtig sind! In effektiven und einfachen Übungen werden Bauch, Beine und Gesäßmuskeln in Form gebracht!
                <br><br>Zu mitreissender Musik kräftigen wir einzele Muskelgruppen nach einem Warm-up mit wechselnden Zusatzgeräten wie zum Beispiel Tubes (Gummibänder), Mini-Bänder, kleine Gewichte und viele mehr.
                Der ultimative Weg zu einem straffen und definierten Körper!
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Indoor Cycling</button>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour">
              <div class="card-body">
                Das Radfahren auf der Stelle ist ein perfektes Training für Körper und Geist. Und: Jeder kann’s! Auch Du!
                <br><br>Action und Entspannung verschmelzen zu einem höchst effektiven Training. Du entscheidest selbst, was du dir beim Indoor-Cycling abverlangst und kannst dich dennoch von deinem Trainer und der Gruppe mitreißen lassen.
                <br><br>Einzigartig: wattbasiertes COACH-BY-COLOR-Training auf den weltbesten Bikes, den TOMAHAWK IC7.
                <br><br>TOMAHAWK&reg; gilt als die deutsche Edelschmiede für Indoor Cycling Bikes.
                Das IC7 ist das innovativste Indoor Cycle, das jemals entwickelt wurde. Die präzise WattRate&reg;-Sensorik zur Messung der Leistung, das Magnetbremssystem mit Positionssensor sowie die einfachen Verstellmöglichkeiten an Lenker und Sattel sind weltweit einzigartig.
                <br><br>Der Coach By Color&reg; Computer mit eigener Energieversorgung ermöglicht die patentierte Darstellung der individuellen Trainingszone anhand von Farben sowohl an den Benutzer als auch simultan an den Trainer. Das IC7 bietet optimale Trainingssteuerung, hohe Motivation und maximalen Komfort.
                Eine Fahrt durch atemberaubende Landschaften. Der Trainer nimmt dich mit auf die Reise.
                Die Kombination aus einer Live-Class mit mitreissenden Trainern, motivierender Musik, einzigartigen Landschaftsaufnahmen ermöglichen ein faszinierendes Trainingserlebnis!
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" id="headingFive">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Jumping Fitness</button>
              </h5>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive">
              <div class="card-body">
                Jumping Fitness&reg; hat sich in kurzer Zeit zur absoluten Trendsportart entwickelt. Denn das unbeschreibliche Gefühl auf dem Trampolin macht wirklich süchtig.
                <br><br>Jumping&reg; ist ein dynamisches Fitnesstraining auf dem dafür speziell entwickelten Power-Trampolin. Für das Training werden traditionelle Aerobic-Schritte benutzt, die allerdings durch den federnden Untergrund deutlich gelenkschonender sind. Der Gleichgewichtssinn und die Körperkoordination werden durch Jumping® geschult und verbessert. Es geht nicht darum hoch hinaus zu springen, sondern mit Körperspannung in das Trampolin zu jumpen.
                <br><br>Beim Jumping&reg; werden mehr als 400 Muskeln aktiv angespannt und entspannt - viel mehr als bei anderen Ausdauer-Sportarten. Es ist ein effizientes Training für den ganzen Körper, stärkt Kondition und Koordination, unterstützt den Muskelaufbau, bringt den Stoffwechsel in Schwung, formt und festigt den Körper in kurzer Zeit - und ganz ohne Muskelkater! - und ist für jeden geeignet, da sich die Intensität der Übungen individuell bestimmen lässt.
                <br><br>Jumping&reg; beansprucht die Faszien und unterstützt den Aufbau und die Erhaltung der Knochendichte. Auf dem Trampolin muss sich der Körper permanent ausbalancieren. Dabei wird die Bauch-, Rücken-, Seiten-, und Beckenmuskulatur beansprucht. Und das bei geringstmöglicher Belastung für die Gelenke.
              </div>
            </div>
          </div>
        </div>
        <br><br>

      @endif

@endsection

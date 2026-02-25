<x-layout.head />
<x-layout.body>
  <main class="flex-1 bg-sand">
    <div class="px-40 py-30 lg:py-50">
      <x-layout.container>

        <div class="flex flex-col gap-y-20 md:grid md:grid-cols-12 md:gap-x-40">
          <div class="md:col-span-8">
            <x-headings.h1 class="!text-teal text-left !px-0 !mb-10 lg:!mb-20">
              Impressum
            </x-headings.h1>

            <div class="flex flex-col gap-y-20 lg:gap-y-30">

              <div>
                <x-headings.h2 class="!mb-5">
                  Senn Tiefbau AG
                </x-headings.h2>
                <p>
                  Schärlibachstrasse 10<br>
                  8374 Dussnang<br>
                  <a href="tel:+41719771000">071 977 10 00</a><br>
                  <a href="mailto:info@senntiefbau.ch">info@senntiefbau.ch</a>
                </p>
              </div>

              <div>
                <x-headings.h2 class="!mb-5">
                  Design und Entwicklung
                </x-headings.h2>
                <p>
                  Stoz Werbeagentur AG<br>
                  Barzloostrasse 2<br>
                  8330 Pfäffikon ZH<br>
                  <a href="mailto:hello@stoz.ch">hello@stoz.ch</a><br>
                  <a href="https://www.stoz.ch" target="_blank">www.stoz.ch</a>
                </p>
              </div>

              <div>
                <x-headings.h2 class="!mb-5">
                  Programmierung
                </x-headings.h2>
                <p>
                  Marcel Stadelmann, Zürich<br>
                  <a href="https://marceli.to" target="_blank">marceli.to</a>
                </p>
              </div>

            </div>

          </div>

        </div>
      </x-layout.container>
    </div>
  </main>
  <x-layout.footer />
</x-layout.body>

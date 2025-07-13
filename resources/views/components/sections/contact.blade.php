@php

@endphp
<section class="relative w-full py-16 lg:py-20 bg-background-subtle dark:bg-dark">
    <div class="container mx-auto px-6 space-y-5">
        <header class="max-w-7xl mx-auto space-y-5">
            <x-elements.heading 
                class="text-dark dark:text-white text-h2 uppercase font-medium font-heading"
                level="h2"
                text="Porozmawiajmy"
            />
        </header>
        <div class="max-w-7xl mx-auto py-12 px-8 bg-background-alt border border-white dark:border-stroke-on-dark dark:bg-dark/80 rounded-theme-inner space-y-10">
            <x-elements.heading 
                class="text-dark dark:text-white text-body-lg uppercase font-medium font-heading"
                level="h2"
                text="Zostaw nam wiadomość"
            />
            <div class="relative">
                <form 
                    action="#" 
                    method="POST"
                    id="contact-form" 
                    x-data="{
                        runConfetti() {
                            var end = Date.now() + (1.5 * 1000);
                            var colors = ['#bb0000', '#ffffff', '#75d14c', '#f8f452'];

                            (function frame() {
                                confetti({
                                    particleCount: 4,
                                    angle: 60,
                                    spread: 55,
                                    origin: { x: 0 },
                                    colors: colors
                                });
                                confetti({
                                    particleCount: 4,
                                    angle: 120,
                                    spread: 55,
                                    origin: { x: 1 },
                                    colors: colors
                                });

                                if (Date.now() < end) {
                                    requestAnimationFrame(frame);
                                }
                            }());
                            setTimeout(() => {
                                $el.reset();
                            }, 500);
                        }
                    }"
                    x-validate.validate-on-submit
                    @submit.prevent="if ($validate.isComplete('contact-form')) runConfetti()"
                    class="space-y-10"
                >
                    <div class="grid lg:grid-cols-7 gap-5">
                        <div class="lg:col-span-2">
                            <x-elements.input-label text="Adres email" for="email" />
                            <x-elements.input-text 
                                id="email" 
                                name="email" 
                                type="email" 
                                placeholder="Twój adres E-mail"
                                class="mt-1 block w-full"
                                data-error-msg='Proszę podać poprawny adres e-mail.'
                                required
                            />
                        </div>
                        <div class="lg:col-span-2">
                            <x-elements.input-label text="Imię i nazwisko" for="name" />
                            <x-elements.input-text 
                                id="name" 
                                name="name" 
                                type="text" 
                                placeholder="Twoje imię i nazwisko"
                                class="mt-1 block w-full"
                                data-error-msg='Proszę podać swoje imię i nazwisko.'
                                required
                            />
                        </div>
                        <div class="lg:col-span-3">
                            <x-elements.input-label text="Temat rozmowy" for="subject" />
                            <x-elements.input-text 
                                id="subject" 
                                name="subject" 
                                type="text" 
                                placeholder="O czym chesz porozmawiać?"
                                class="mt-1 block w-full"
                                data-error-msg='Proszę podać temat rozmowy.'
                                required
                            />
                        </div>
                        <div class="lg:col-span-7">
                            <x-elements.input-label text="Wiadomość" for="subject" />
                            <x-elements.textarea 
                                id="message" 
                                name="message" 
                                placeholder="Napisz swoją wiadomość"
                                data-error-msg='Proszę wpisać treść wiadomości.'
                                class="mt-1 block w-full h-[150px]"
                                required
                            />
                        </div>
                        <div class="lg:col-span-7">
                            <div class="relative" data-error-msg='Proszę zaakceptować regulamin.'>
                                <label 
                                    class="text-body-xs text-text dark:text-text-on-dark flex items-start gap-2 cursor-pointer">
                                    <input 
                                        id="terms" 
                                        name="terms" 
                                        type="checkbox" 
                                        required
                                        x-validate.group
                                        class="peer relative size-4 shrink-0 appearance-none rounded-full border border-stroke-base bg-white before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-primary checked:bg-primary focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary user-invalid:border-[#B3261E]" 
                                    />
                                    <span class="block peer-user-invalid:text-[#B3261E] dark:peer-user-invalid:text-[#f3eae8]">Wyrażam zgodę na przetwarzanie moich danych osobowych w postaci imienia, nazwiska, adresu e-mail i nr tel. (jeżeli został podany), podanych w powyższym formularzu, zgodnie z przepisami rozporządzenia Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (ogólne rozporządzenie o ochronie danych), Dz. Urz. UE z 4.5.2016 r. L 119, str. 1), w celu udzielenia odpowiedzi na złożone zapytanie. Żądanie usunięcia danych proszę kierować na adres biuro@realestate.com <span class="block mt-4">Informujemy, że: 1. Administratorem Pani/Pana danych osobowych jest RealEstate sp. z o.o. z siedzibą w Poznaniu przy ul. Długiej 5 lok. 25, 01-200 Poznań (KRS nr 0001000000) (dalej „Administrator”) e-mail: biuro@realestate.com</span></span></label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <x-elements.button 
                            type="submit" 
                            text="Wyślij wiadomość" 
                            icon="true"
                            class="uppercase"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
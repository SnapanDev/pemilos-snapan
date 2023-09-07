const svg = `<svg class="h-4 sm:h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#3063af">
<path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
</svg>
`;

interface dataCalon {
    visi: string;
    misi: string[];
    proker: string[];
}

const templateList = (title: string): string => {
    return `<section class="flex flex-row h-full mt-4">
    <div class="min-w-[14px] sm:min-w-[20px] flex items-center pr-2">
        ${svg}
    </div>
    <div>
        <p>${title}</p>
    </div>
</section>`;
};

const firstCaketosData: dataCalon = {
    visi: "Membuat SMK Negeri 8 Semarang menjadi lebih menonjol di pandangan masyarakat melalui prestasi yang akan diraih serta melalui event inovatif nan kreatif yang diadakan oleh OSIS bersama pihak sekolah.",
    misi: [
        "Menjadikan OSIS sebagai organisasi yang paling berpengaruh di setiap kegiatan yang diadakan oleh SMK",
        "Membantu menyalurkan aspirasi siswa SMK 8 terhadap kinerja OSIS dan Sekolah.",
        "Mengelola akun medsos SMK 8 menjadi lebih baik terkait konten yang diposting.",
        "Memberikan panggung kepada siswa siswa Snapan yang memiliki keunggulan di setiap event sekolah.",
    ],
    proker: [
        "Membuat forum yang berisi para pengurus organisasi dan ekstrakurikuler pilihan.",
        "Membuat konten yang sedang trend di akun tik tok SMK 8 Semarang.",
        "Sedikit menambah agenda/kegiatan di setiap event OSIS.",
    ],
};

const visiCaketos1 = document.getElementById("#visiCaketos1");
const misiCaketos1 = document.getElementById("#misiCaketos1");
const prokerCaketos1 = document.getElementById("#prokerCaketos1");
misiCaketos1!.innerHTML += firstCaketosData.misi
    .map((val) => templateList(val))
    .join("");
visiCaketos1!.innerHTML += firstCaketosData.visi;
prokerCaketos1!.innerHTML += firstCaketosData.proker
    .map((val) => templateList(val))
    .join("");

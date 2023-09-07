interface dataCalon {
    visi: string;
    misi: string[];
    proker: string[];
}

const templateList = (title: string): string => {
    return `<section class="flex flex-row h-full mt-4">
    <div class="min-w-[14px] sm:min-w-[20px] flex items-center mr-2">
        <img class="" src="/img/rocket.svg" alt="">
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
const prokerCaketos1 = document.getElementById("#prokerCaketos1")
misiCaketos1!.innerHTML += firstCaketosData.misi.map((val) => templateList(val)).join("");
visiCaketos1!.innerHTML += firstCaketosData.visi;
prokerCaketos1!.innerHTML += firstCaketosData.proker.map((val)=> templateList(val)).join("")


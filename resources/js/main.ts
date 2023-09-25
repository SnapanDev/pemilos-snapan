import {
    templateList,
    firstCaketosData,
    secondCaketosData,
    thirdCaketosData,
    firstCakempkData,
    secondCakempkData,
    thirdCakempkData,
} from "./data";

// cakempk
// Visi Misi Caketos 1
const visiCaketos1 = document.getElementById("#visiCaketos1");
const misiCaketos1 = document.getElementById("#misiCaketos1");
const prokerCaketos1 = document.getElementById("#prokerCaketos1");
// Visi Misi Caketos 2
const visiCaketos2 = document.getElementById("#visiCaketos2");
const misiCaketos2 = document.getElementById("#misiCaketos2");
const prokerCaketos2 = document.getElementById("#prokerCaketos2");
// Visi Misi Caketos 3
const visiCaketos3 = document.getElementById("#visiCaketos3");
const misiCaketos3 = document.getElementById("#misiCaketos3");
const prokerCaketos3 = document.getElementById("#prokerCaketos3");

// Visi Misi Cakempk 1
const visiCakeMpk1 = document.getElementById("#visiCakeMpk1");
const misiCakeMpk1 = document.getElementById("#misiCakeMpk1");
const prokerCakeMpk1 = document.getElementById("#prokerCakeMpk1");
// Visi Misi Cakempk 2
const visiCakeMpk2 = document.getElementById("#visiCakeMpk2");
const misiCakeMpk2 = document.getElementById("#misiCakeMpk2");
const prokerCakeMpk2 = document.getElementById("#prokerCakeMpk2");
// Visi Misi Cakempk 3
const visiCakeMpk3 = document.getElementById("#visiCakeMpk3");
const misiCakeMpk3 = document.getElementById("#misiCakeMpk3");
const prokerCakeMpk3 = document.getElementById("#prokerCakeMpk3");

misiCaketos1!.innerHTML += firstCaketosData.misi
    .map((val) => templateList(val))
    .join("");
visiCaketos1!.innerHTML += firstCaketosData.visi;
prokerCaketos1!.innerHTML += firstCaketosData.proker
    .map((val) => templateList(val))
    .join("");

misiCaketos2!.innerHTML += secondCaketosData.misi
    .map((val) => templateList(val))
    .join("");
visiCaketos2!.innerHTML += secondCaketosData.visi;
prokerCaketos2!.innerHTML += secondCaketosData.proker
    .map((val) => templateList(val))
    .join("");

misiCaketos3!.innerHTML += thirdCaketosData.misi
    .map((val) => templateList(val))
    .join("");
visiCaketos3!.innerHTML += thirdCaketosData.visi;
prokerCaketos3!.innerHTML += thirdCaketosData.proker
    .map((val) => templateList(val))
    .join("");

// Rin Tohsaka <3

misiCakeMpk1!.innerHTML += firstCakempkData.misi
    .map((val) => templateList(val))
    .join("");
visiCakeMpk1!.innerHTML += firstCakempkData.visi;
prokerCakeMpk1!.innerHTML += firstCakempkData.proker
    .map((val) => templateList(val))
    .join("");

misiCakeMpk2!.innerHTML += secondCakempkData.misi
    .map((val) => templateList(val))
    .join("");
visiCakeMpk2!.innerHTML += secondCakempkData.visi;
prokerCakeMpk2!.innerHTML += secondCakempkData.proker
    .map((val) => templateList(val))
    .join("");

misiCakeMpk3!.innerHTML += thirdCakempkData.misi
    .map((val) => templateList(val))
    .join("");
visiCakeMpk3!.innerHTML += thirdCakempkData.visi;
prokerCakeMpk3!.innerHTML += thirdCakempkData.proker
    .map((val) => templateList(val))
    .join("");

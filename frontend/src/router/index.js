import { createRouter, createWebHistory } from 'vue-router'
// import HomeView from '../views/HomeView.vue'
import landingpage from '../views/landingpage.vue'
import page from '../views/page.vue'
import loginform from '../views/form/loginform.vue'
import registrationform from '../views/form/registrationform.vue'
import updateform from '../views/form/updateform.vue'
import index from '../components/index.vue'
import about from '../views/info/about.vue'
import contact from '../views/info/contact.vue'
import category from '../views/info/category.vue'
import jobDetails from '../views/info/jobDetails.vue'
import testimonial from '../views/info/testimonial.vue'
import personal from '../views/info/personal.vue'
import EditProfileForm from '../views/info/profile.vue'

// jobCategory section
import automotive from '../views/jobCategory/automotive.vue'
import business from '../views/jobCategory/business.vue'
import drafting from '../views/jobCategory/drafting.vue'
import education from '../views/jobCategory/education.vue'
import fashion from '../views/jobCategory/fashion.vue'
import information from '../views/jobCategory/information.vue'
import justice from '../views/jobCategory/justice.vue'
import psychology from '../views/jobCategory/psychology.vue'
import food from '../views/jobCategory/food.vue'
import industrial from '../views/jobCategory/industrial.vue'
import home from '../views/jobCategory/home.vue'
import tech from '../views/jobCategory/tech.vue'



// admin section
import index1 from '../views/admin/dashboard/index1.vue'
import index2 from '../views/admin/dashboard/index2.vue'
import index3 from '../views/admin/dashboard/index3.vue'
import index4 from '../views/admin/dashboard/index4.vue'

import lead1 from '../views/admin/dashboard/org/lead1.vue'
import baanaw1 from '../views/admin/dashboard/org/baanaw1.vue'
import buklod1 from '../views/admin/dashboard/org/buklod1.vue'
import eng1 from '../views/admin/dashboard/org/eng1.vue'
import gad1 from '../views/admin/dashboard/org/gad1.vue'
import legits1 from '../views/admin/dashboard/org/legits1.vue'
import linguistic1 from '../views/admin/dashboard/org/linguistic1.vue'
import samfil1 from '../views/admin/dashboard/org/samfil1.vue'
import sikada1 from '../views/admin/dashboard/org/sikada1.vue'
import teatro1 from '../views/admin/dashboard/org/teatro1.vue'
import turista1 from '../views/admin/dashboard/org/turista1.vue'
import veritas1 from '../views/admin/dashboard/org/veritas1.vue'
// forms
import adminLogin from '../views/admin/forms/adminLogin.vue'
import adminRegister from '../views/admin/forms/adminRegister.vue'
import forgotPassword from '../views/admin/forms/forgotPassword.vue'

import jobTable from '../views/admin/jobPlacement/jobTable.vue'
import insert from '../views/admin/jobPlacement/insert.vue'
import infoTable from '../views/admin/jobPlacement/infoTable.vue'
import inquireTable from '../views/admin/jobPlacement/inquireTable.vue'
import profileTable from '../views/admin/jobPlacement/profileTable.vue'

import orgtable from '../views/admin/StudentOrg/orgtable.vue'
import insertEvent from '../views/admin/StudentOrg/insertEvent.vue'
import event_Calendar from '../views/admin/StudentOrg/event_Calendar.vue'
// orgList
import lead from '../views/admin/StudentOrg/orgList/lead.vue'
import baanaw from '../views/admin/StudentOrg/orgList/baanaw.vue'
import buklod from '../views/admin/StudentOrg/orgList/buklod.vue'
import eng from '../views/admin/StudentOrg/orgList/eng.vue'
import gad from '../views/admin/StudentOrg/orgList/gad.vue'
import legits from '../views/admin/StudentOrg/orgList/legits.vue'
import linguistic from '../views/admin/StudentOrg/orgList/linguistic.vue'
import samfil from '../views/admin/StudentOrg/orgList/samfil.vue'
import sikada from '../views/admin/StudentOrg/orgList/sikada.vue'
import teatro from '../views/admin/StudentOrg/orgList/teatro.vue'
import turista from '../views/admin/StudentOrg/orgList/turista.vue'
import veritas from '../views/admin/StudentOrg/orgList/veritas.vue'
import USG from '../views/admin/StudentOrg/orgList/USG.vue'

import accounts from '../views/admin/accounts.vue'
import alumniAcc from '../views/admin/alumniAcc.vue'
import chairsAcc from '../views/admin/chairsAcc.vue'

import infoSection from '../views/admin/studentDiscipline/infoSection.vue'

// orgwebsite
import orgIndex from '../views/StudentOrgWebsite/orgIndex.vue'
import hero from '../views/StudentOrgWebsite/hero.vue'
import orgAbout from '../views/StudentOrgWebsite/orgAbout.vue'
import orgContact from '../views/StudentOrgWebsite/orgContact.vue'
import service from '../views/StudentOrgWebsite/service.vue'
import orgReg from '../views/StudentOrgWebsite/orgReg.vue'
import orgLogin from '../views/StudentOrgWebsite/orgLogin.vue'
import orgForgot from '../views/StudentOrgWebsite/orgForgot.vue'
import events from '../views/StudentOrgWebsite/events.vue'

// scholarshipSection
import payrollsTable from '../views/admin/scholarshipSection/payrollsTable.vue'
import insertScholar from '../views/admin/scholarshipSection/insertScholar.vue'
import addScholar from '../views/admin/scholarshipSection/addScholar.vue'
import mainTable from '../views/admin/scholarshipSection/mainTable.vue'
import stat from '../views/admin/scholarshipSection/stat.vue'

// studentDiscipline
import handbook from '../views/admin/studentDiscipline/handbook.vue'
import InsertInformation from '../views/admin/studentDiscipline/InsertInformation.vue'

const routes = [
  {
    path: '/landing',
    // name: 'home',
    component: landingpage
  },
  {
    path: '/page',
    // name: 'home',
    component: page
  },
  {
    path: '/',
    // name: 'home',
    component: index
  },
  {
    path: '/about',
    // name: 'home',
    component: about
  },
  {
    path: '/contact',
    // name: 'home',
    component: contact
  },
  {
    path: '/category',
    // name: 'home',
    component: category
  },
  {
    path: '/jobDetails',
    // name: 'home',
    component: jobDetails
  },
  {
    path: '/testimonial',
    component: testimonial
  },
  {
    path: '/personal',
    component: personal
  },

    {
      path: '/profile/:id',
      name: 'edit-form',
      component: EditProfileForm,
    },


  // jobsection category
  {
    path: '/automotive/:jobCategory',
    component: automotive,
     name: automotive
  },
  {
    path: '/business/:jobCategory',
    component: business,
     name: business
  },
  {
    path: '/drafting/:jobCategory',
    component: drafting,
     name: drafting
  },
  {
    path: '/education/:jobCategory',
    component: education,
     name: education
  },
  {
    path: '/fashion/:jobCategory',
    component: fashion,
     name: fashion
  },
  {
    path: '/information/:jobCategory',
    component: information,
     name: information
  },
  {
    path: '/justice/:jobCategory',
    component: justice,
     name: justice
  },
  {
    path: '/psychology/:jobCategory',
    component: psychology,
     name: psychology
  },
  {
    path: '/food/:jobCategory',
    component: food,
     name: food
  },
  {
    path: '/industrial/:jobCategory',
    component: industrial,
     name: industrial
  },
  {
    path: '/home/:jobCategory',
    component: home,
     name: home
  },
  {
    path: '/tech/:jobCategory',
    component: tech,
     name: tech
  },


  // admin section
  {
    path: '/index1',
    component: index1
  },
  {
    path: '/index2',
    component: index2
  },
  {
    path: '/index3',
    component: index3
  },
  {
    path: '/index4',
    component: index4
  },

  // forms
  {
    path: '/adminLogin',
    component: adminLogin
  },
  {
    path: '/adminRegister',
    component: adminRegister
  },
  {
    path: '/forgotPassword',
    component: forgotPassword
  },
  {
    path: '/jobTable',
    component: jobTable
  },
  {
    path: '/insert',
    component: insert
  },
  {
    path: '/infoTable',
    component: infoTable
  },

  {
    path: '/orgtable',
    component: orgtable
  },
  {
    path: '/insertEvent',
    component: insertEvent
  },
  {
    path: '/event_Calendar',
    component: event_Calendar
  },
  {
    path: '/inquireTable',
    component: inquireTable
  },
  {
    path: '/profileTable',
    component: profileTable
  },
{
  path: '/infoSection',
  component: infoSection
},

{
  path: '/orgwebsite',
  component: orgIndex
},
{
  path: '/hero',
  component: hero
},
{
  path: '/orgAbout',
  component: orgAbout
},
{
  path: '/orgContact',
  component: orgContact
},
{
  path: '/service',
  component: service
},
{
  path: '/orgReg',
  component: orgReg
},
{
  path: '/orgLogin',
  component: orgLogin
},
{
  path: '/orgForgot',
  component: orgForgot
},
{
  path: '/events',
  component: events
},
// scholarshipSection
{
  path: '/payrollsTable',
  component: payrollsTable
},
{
  path: '/insertScholar',
  component: insertScholar
},
{
  path: '/addScholar',
  component: addScholar
},
{
  path: '/mainTable',
  component: mainTable
},
{
  path: '/stat',
  component: stat
},
// studentdiscipline
{
  path: '/handbook',
  component: handbook
},
{
  path: '/insertInformation',
  component: InsertInformation
},

// orgList
{
  path: '/lead',
  component: lead
},
{
  path: '/eng',
  component: eng
},
{
  path: '/gad',
  component: gad
},
{
  path: '/linguistic',
  component: linguistic
},
{
  path: '/legits',
  component: legits
},
{
  path: '/samfil',
  component: samfil
},
{
  path: '/sikada',
  component: sikada
},
{
  path: '/teatro',
  component: teatro
},
{
  path: '/turista',
  component: turista
},
{
  path: '/veritas',
  component: veritas
},
{
  path: '/buklod',
  component: buklod
},
{
  path: '/baanaw',
  component: baanaw
},
{
  path: '/USG',
  component: USG
},

// alumni'sform
{
  path: '/loginform',
  component: loginform
},
{
  path: '/registrationform',
  component: registrationform
},
{
  path: '/updateform',
  component: updateform
},
{
  path: '/accounts',
  component: accounts
},
{
  path: '/alumniAcc',
  component: alumniAcc
},
{
  path: '/chairsAcc',
  component: chairsAcc
},

{
  path: '/lead1',
  component: lead1
},
{
  path: '/eng1',
  component: eng1
},
{
  path: '/gad1',
  component: gad1
},
{
  path: '/linguistic1',
  component: linguistic1
},
{
  path: '/legits1',
  component: legits1
},
{
  path: '/samfil1',
  component: samfil1
},
{
  path: '/sikada1',
  component: sikada1
},
{
  path: '/teatro1',
  component: teatro1
},
{
  path: '/turista1',
  component: turista1
},
{
  path: '/veritas1',
  component: veritas1
},
{
  path: '/buklod1',
  component: buklod1
},
{
  path: '/baanaw1',
  component: baanaw1
},
  // {
  //   path: '/about',
  //   name: 'about',
  //   // route level code-splitting
  //   // this generates a separate chunk (about.[hash].js) for this route
  //   // which is lazy-loaded when the route is visited.
  //   component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  // }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
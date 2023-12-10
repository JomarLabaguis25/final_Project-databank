import { createRouter, createWebHistory } from 'vue-router'
// import HomeView from '../views/HomeView.vue'
import landingpage from '../views/landingpage.vue'
import loginform from '../views/form/loginform.vue'
import registrationform from '../views/form/registrationform.vue'
import updateform from '../views/form/updateform.vue'
import index from '../components/index.vue'
import about from '../views/info/about.vue'
import contact from '../views/info/contact.vue'
import category from '../views/info/category.vue'
import jobDetails from '../views/info/jobDetails.vue'
import testimonial from '../views/info/testimonial.vue'

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

// forms
import adminLogin from '../views/admin/forms/adminLogin.vue'
import adminRegister from '../views/admin/forms/adminRegister.vue'
import forgotPassword from '../views/admin/forms/forgotPassword.vue'

import jobTable from '../views/admin/jobPlacement/jobTable.vue'
import insert from '../views/admin/jobPlacement/insert.vue'
import infoTable from '../views/admin/jobPlacement/infoTable.vue'
import process from '../views/admin/jobPlacement/process.vue'
import inquireTable from '../views/admin/jobPlacement/inquireTable.vue'

import orgtable from '../views/admin/StudentOrg/orgtable.vue'
import insertEvent from '../views/admin/StudentOrg/insertEvent.vue'
import event_Calendar from '../views/admin/StudentOrg/event_Calendar.vue'
import statistics from '../views/admin/StudentOrg/statistics.vue'
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

  // jobsection category
  {
    path: '/automotive/:jobCategory',
    component: automotive,
     name: automotive
  },
  {
    path: '/businessjobcategory',
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
    path: '/process',
    component: process
  },
  {
    path: '/inquireTable',
    component: inquireTable
  },
  {
  path: '/statistics',
  component: statistics
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
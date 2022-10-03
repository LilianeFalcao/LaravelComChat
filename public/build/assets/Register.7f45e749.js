import{u as _,o as c,d as f,b as e,f as a,w as l,F as w,H as g,a as t,e as h,L as v,n as y,l as V,h as u}from"./app.ac94f828.js";import{A as k}from"./AuthenticationCard.beec1e70.js";import{_ as b}from"./AuthenticationCardLogo.9e7c691e.js";import{_ as x}from"./Checkbox.9f3b3ce6.js";import{_ as d,a as m}from"./TextInput.f405d2c1.js";import{_ as i}from"./InputLabel.3d8c1cda.js";import{_ as $}from"./PrimaryButton.fea07dd7.js";import"./_plugin-vue_export-helper.cdc0426e.js";const P=["onSubmit"],q={class:"mt-4"},C={class:"mt-4"},F={class:"mt-4"},N={key:0,class:"mt-4"},U={class:"flex items-center"},A={class:"ml-2"},B=u(" I agree to the "),R=["href"],S=u(" and "),T=["href"],j={class:"flex items-center justify-end mt-4"},E=u(" Already registered? "),H=u(" Register "),Q={name:"Register",setup(L){const s=_({name:"",email:"",password:"",password_confirmation:"",terms:!1}),p=()=>{s.post(route("register"),{onFinish:()=>s.reset("password","password_confirmation")})};return(n,o)=>(c(),f(w,null,[e(a(g),{title:"Register"}),e(k,null,{logo:l(()=>[e(b)]),default:l(()=>[t("form",{onSubmit:V(p,["prevent"])},[t("div",null,[e(i,{for:"name",value:"Name"}),e(d,{id:"name",modelValue:a(s).name,"onUpdate:modelValue":o[0]||(o[0]=r=>a(s).name=r),type:"text",class:"mt-1 block w-full",required:"",autofocus:"",autocomplete:"name"},null,8,["modelValue"]),e(m,{class:"mt-2",message:a(s).errors.name},null,8,["message"])]),t("div",q,[e(i,{for:"email",value:"Email"}),e(d,{id:"email",modelValue:a(s).email,"onUpdate:modelValue":o[1]||(o[1]=r=>a(s).email=r),type:"email",class:"mt-1 block w-full",required:""},null,8,["modelValue"]),e(m,{class:"mt-2",message:a(s).errors.email},null,8,["message"])]),t("div",C,[e(i,{for:"password",value:"Password"}),e(d,{id:"password",modelValue:a(s).password,"onUpdate:modelValue":o[2]||(o[2]=r=>a(s).password=r),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"]),e(m,{class:"mt-2",message:a(s).errors.password},null,8,["message"])]),t("div",F,[e(i,{for:"password_confirmation",value:"Confirm Password"}),e(d,{id:"password_confirmation",modelValue:a(s).password_confirmation,"onUpdate:modelValue":o[3]||(o[3]=r=>a(s).password_confirmation=r),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"]),e(m,{class:"mt-2",message:a(s).errors.password_confirmation},null,8,["message"])]),n.$page.props.jetstream.hasTermsAndPrivacyPolicyFeature?(c(),f("div",N,[e(i,{for:"terms"},{default:l(()=>[t("div",U,[e(x,{id:"terms",checked:a(s).terms,"onUpdate:checked":o[4]||(o[4]=r=>a(s).terms=r),name:"terms",required:""},null,8,["checked"]),t("div",A,[B,t("a",{target:"_blank",href:n.route("terms.show"),class:"underline text-sm text-gray-600 hover:text-gray-900"},"Terms of Service",8,R),S,t("a",{target:"_blank",href:n.route("policy.show"),class:"underline text-sm text-gray-600 hover:text-gray-900"},"Privacy Policy",8,T)])]),e(m,{class:"mt-2",message:a(s).errors.terms},null,8,["message"])]),_:1})])):h("",!0),t("div",j,[e(a(v),{href:n.route("login"),class:"underline text-sm text-gray-600 hover:text-gray-900"},{default:l(()=>[E]),_:1},8,["href"]),e($,{class:y(["ml-4",{"opacity-25":a(s).processing}]),disabled:a(s).processing},{default:l(()=>[H]),_:1},8,["class","disabled"])])],40,P)]),_:1})],64))}};export{Q as default};

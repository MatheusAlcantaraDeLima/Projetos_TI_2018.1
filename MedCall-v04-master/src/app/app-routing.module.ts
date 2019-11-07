import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  { path: '', redirectTo: 'login', pathMatch: 'full' },
  { path: 'login', loadChildren: './login/login.module#LoginPageModule' },
  { path: 'registro', loadChildren: './registro/registro.module#RegistroPageModule' },
  { path: 'medicamentos', loadChildren: './medicamentos/medicamentos.module#MedicamentosPageModule' },
  { path: 'dependentes', loadChildren: './dependentes/dependentes.module#DependentesPageModule' },
  { path: 'consultas', loadChildren: './consultas/consultas.module#ConsultasPageModule' },
  { path: 'consultasm', loadChildren: './consultasm/consultasm.module#ConsultasmPageModule' },
  { path: 'dependentesm', loadChildren: './dependentesm/dependentesm.module#DependentesmPageModule' },
  { path: 'medicamentosm', loadChildren: './medicamentosm/medicamentosm.module#MedicamentosmPageModule' },
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }

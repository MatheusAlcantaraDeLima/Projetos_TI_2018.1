import { Component, OnInit } from '@angular/core';
import { ModalController } from '@ionic/angular';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';
import { Usuario } from '../model/usuario';
import { ActivatedRoute } from '@angular/router';
import { UsuarioService } from '../services/usuario/usuario.service';

@Component({
  selector: 'app-registro',
  templateUrl: './registro.page.html',
  styleUrls: ['./registro.page.scss'],
  providers: [ FormBuilder ]
})
export class RegistroPage implements OnInit {
  usuarioForm: FormGroup;
  usuario: Usuario;
  usuarioID: number;
  editable: boolean = false;

  constructor(
    private Builder: FormBuilder,
    private modalCtrl: ModalController,
    private route: ActivatedRoute,
    private usuarioService: UsuarioService
  ) {}


  ngOnInit() {
    this.usuarioForm = this.Builder.group({
      email_usuario: [
        '',
        [
          Validators.required, // validação de campo requirido
          Validators.email, // validação de campo de email
          Validators.maxLength(90), // validação de maximo de caracteres
          Validators.minLength(10), // validação de minimo de caracteres
        ]
      ],
      senha_usuario: [
        '',
        [
          Validators.required, // validação de campo requirido
          Validators.maxLength(90), // validação de maximo de caracteres
          Validators.minLength(10), // validação de minimo de caracteres
        ]
      ],
    });
    this.route.paramMap.subscribe(params =>{
      this.usuarioID =+ params.get('id');
      if(this.usuarioID){
        this.getUsuario(this.usuarioID);
        this.editable =true;
      }
    })
  }

  //registra o usuraios
  addUsuario() {
    //Resgata os valores do campo e faz um cast(conversão) para o modelo Usuario
    const novoUsuario = this.usuarioForm.getRawValue() as Usuario;
    this.usuarioService
      .addUsuario(novoUsuario)
      .subscribe(
        () =>{
          this.modalCtrl.dismiss();//Fecha a aba de registro
          this.usuarioForm.reset();//limpa os formularios
        },
        error => {
          console.log(error+"teste");
          this.usuarioForm.reset();
        }
      );
  }

  getUsuario(id_usuario: number){
    this.usuarioService.selectUsuarioById(id_usuario).subscribe(
      (usuarioDB: Usuario) =>this.loadForm(usuarioDB),
      errorDB => console.log(errorDB)
    );
  }
  loadForm(usuario: Usuario){
    this.usuarioForm.patchValue({
      email_usuario: usuario.email_usuario,
      senha_usuario: usuario.email_usuario
    });
  }

  editUsuario(){
    const usuarioEditado = this.usuarioForm.getRawValue() as Usuario;
    usuarioEditado.id_usuario = this.usuarioID;

    this.usuarioService.updateUsuario(usuarioEditado).subscribe(
      () => {
        this.modalCtrl.dismiss();
        this.usuarioForm.reset();
      },
      error => {
        console.log(error);
        this.usuarioForm.reset();
      } 
    );
  }
  
  fechar() {
    this.modalCtrl.dismiss();
  }
}

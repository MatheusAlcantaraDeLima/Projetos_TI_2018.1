import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders, HttpErrorResponse } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { retry, catchError } from 'rxjs/operators';
import { Medicamento } from '../../model/medicamento';

@Injectable({
  providedIn: 'root'
})
export class MedicamentoService {// API path
  base_path = 'http://localhost/medcall/user/';

  constructor(private http: HttpClient) { }

  // Http Options
  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  }

  // Handle API errors
  private handleError(error: HttpErrorResponse) {
    if (error.error instanceof ErrorEvent) {
      // Ocorreu um erro no cliente ou na rede.
      console.error('Ocorreu um erro:', error.error.message);
    } else {
      // O back-end retornou um código de resposta sem êxito.
      // O corpo da resposta pode conter pistas sobre o que deu errado.
      console.error(
        `Backend returned code ${error.status}, ` +
        `body was: ${error.error}`);
    }
    // return an observable with a user-facing error message
    return throwError(
      'Something bad happened; please try again later.');
  };

  /** C.R.U.D **/

  /**
   * addMedicamento(Medicamento) - Método responsável por inserir Usesrios no banco
   */
  public addMedicamento(Medicamento: Medicamento): Observable<Medicamento> {
    return this.http
      .post<Medicamento>(this.base_path, JSON.stringify(Medicamento), this.httpOptions)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

  /**
   * selectMedicamentoById(id_medicamento) - Método responsável por buscar um Medicamento pelo id
   */
  public selectMedicamentoById(id_medicamento: number): Observable<Medicamento> {
    return this.http
      .get<Medicamento>(this.base_path + '?id=' + id_medicamento)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

  /**
   * selectMedicamentoById(id) - Método responsável por buscar um Medicamento pelo id
   */
  public selectMedicamento(): Observable<Medicamento> {
    return this.http
      .get<Medicamento>(this.base_path)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

  /**
   * updateMedicamento(Medicamento) - Método responsável por atualizar um Medicamento
   */
  public updateMedicamento(Medicamento: Medicamento): Observable<Medicamento> {
    return this.http
      .put<Medicamento>(this.base_path + '?id=' + Medicamento.id_medicamento, JSON.stringify(Medicamento), this.httpOptions)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

  /**
   * deleteMedicamento(id) - Método responsável por excluir um Usario 
   */
  public deleteMedicamento(id_medicamento: number) {
    return this.http
      .delete<Medicamento>(this.base_path + '?id=' + id_medicamento, this.httpOptions)
      .pipe(
        retry(0),
        catchError(this.handleError)
      )
  }

}
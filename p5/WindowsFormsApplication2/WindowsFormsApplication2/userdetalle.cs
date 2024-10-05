
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace WindowsFormsApplication2
{
    public partial class userdetalle : Form
    {
        DataSet ds = new DataSet(); 
        SqlDataAdapter ada = new SqlDataAdapter();
        

        private int userId;
        public userdetalle(int userId)
        {
            InitializeComponent();
            this.userId = userId;
            dataGridView1.ReadOnly = false;
            dataGridView1.CellEndEdit += new DataGridViewCellEventHandler(dataGridView1_CellEndEdit);
        }

        private void dataGridView1_CellEndEdit(object sender, DataGridViewCellEventArgs e)
        {
            int rowIndex = e.RowIndex;
            int columnIndex = e.ColumnIndex;

            if (rowIndex >= 0 && rowIndex < ds.Tables["catastro"].Rows.Count)
            {
                DataRow dr = ds.Tables["catastro"].Rows[rowIndex];
                string columnName = dataGridView1.Columns[columnIndex].Name;
                dr[columnName] = dataGridView1[e.ColumnIndex, rowIndex].Value;
                updateDatabase(dr);
            }
        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            int rowIndex = e.RowIndex;
            if (rowIndex >= 0 && rowIndex < ds.Tables["catastro"].Rows.Count)
            {
                if (e.ColumnIndex == dataGridView1.Columns["Eliminar"].Index)
                {
                    var result = MessageBox.Show("¿Estás seguro de que deseas eliminar esta fila?", "Confirmar Eliminación", MessageBoxButtons.YesNo);
                    if (result == DialogResult.Yes)
                    {

                        DataRow dr = ds.Tables["catastro"].Rows[rowIndex];
                        Eliminar(dr);
                        ds.Tables["catastro"].Rows.Remove(dr);
                    }
                }
                else
                {
                    DataRow dr = ds.Tables["catastro"].Rows[rowIndex];
                    updateDatabase(dr);
                }
            }
        }
        private void Eliminar(DataRow dr)
        {
            SqlConnection con = new SqlConnection();
            con.ConnectionString = "server=DESKTOP-957VEUH\\MISSAEL70586532;database=BDMissael;Integrated Security=True;";

            SqlCommand cmd = new SqlCommand();
            cmd.Connection = con;
            cmd.CommandText = "DELETE FROM catastro WHERE id=@id";
            cmd.Parameters.AddWithValue("@id", dr["id"]);
            label2.Text = "Eliminando...";
            con.Open();
            try
            {
                cmd.ExecuteNonQuery();
                label2.Text = "Eliminado exitosamente";
            }
            catch (Exception ex)
            {
                label2.Text = "Error al eliminar: " + ex.Message;
            }
        }



        private void updateDatabase(DataRow dr)
        {
            SqlConnection con = new SqlConnection();
            con.ConnectionString = "server=DESKTOP-957VEUH\\MISSAEL70586532;database=BDMissael;Integrated Security=True;";

            SqlCommand cmd = new SqlCommand();
            cmd.Connection = con;
            cmd.CommandText = "UPDATE catastro SET zona=@zona, direccion=@direccion, superficie=@superficie, distrito=@distrito WHERE id=@id";
            cmd.Parameters.AddWithValue("@zona", dr["zona"]);
            cmd.Parameters.AddWithValue("@direccion", dr["direccion"]);
            cmd.Parameters.AddWithValue("@superficie", dr["superficie"]);
            cmd.Parameters.AddWithValue("@distrito", dr["distrito"]);
            cmd.Parameters.AddWithValue("@id", dr["id"]);
            cmd.CommandType = CommandType.Text;

            label2.Text = "Guardando";
            con.Open();
                cmd.ExecuteNonQuery();

                      
        }
        private void datos()
        {
            SqlConnection con = new SqlConnection();
            con.ConnectionString = "server=DESKTOP-957VEUH\\MISSAEL70586532;database=BDMissael;Integrated Security=True;";

            ada.SelectCommand = new SqlCommand();
            ada.SelectCommand.Connection = con;
            ada.SelectCommand.CommandText = "select * from catastro where usuario_id = @userid";
            ada.SelectCommand.CommandType = CommandType.Text;
            ada.SelectCommand.Parameters.AddWithValue("@userid", userId);

            ada.Fill(ds, "catastro");
            dataGridView1.DataSource = ds;
            dataGridView1.DataMember = "catastro";


        }


        private void userdetalle_Load(object sender, EventArgs e)
        {
            datos();
            // agregar lista de boton eliminar
            if (dataGridView1.Columns["Eliminar"] == null)
            {
                DataGridViewButtonColumn btnDelete = new DataGridViewButtonColumn();
                btnDelete.Name = "Eliminar"; 
                btnDelete.HeaderText = "Eliminar";
                btnDelete.Text = "Eliminar";
                btnDelete.UseColumnTextForButtonValue = true;
                dataGridView1.Columns.Add(btnDelete);
            }
        }

        private void label2_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            agregar agregarForm = new agregar(userId);
            agregarForm.Show();
            this.Close();

        }
    }
}

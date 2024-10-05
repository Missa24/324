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
    public partial class agregar : Form
    {
        DataSet ds = new DataSet();
        SqlDataAdapter ada = new SqlDataAdapter();
        
        private int userId;

        public agregar(int userId)
        {
            InitializeComponent();
            this.userId = userId;
        }

        private void agregar_Load(object sender, EventArgs e)
        {
        }

        private void label6_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, System.EventArgs e)
        {
            string zona = textBox1.Text;
            string codigocatastral = textBox2.Text;
            string direccion = textBox3.Text;
            decimal superficie = 0;
            decimal.TryParse(textBox4.Text, out superficie);
            string distrito = textBox6.Text;
            SqlConnection con = new SqlConnection();
            con.ConnectionString = "server=DESKTOP-957VEUH\\MISSAEL70586532;database=BDMissael;Integrated Security=True;";

            SqlCommand cmd = new SqlCommand();
            cmd.Connection = con;
            cmd.CommandText = "INSERT INTO catastro (zona, codigocatastral, direccion, superficie, distrito, usuario_id) VALUES (@zona, @codigocatastral, @direccion, @superficie, @distrito, @userid)";

            cmd.Parameters.AddWithValue("@zona", zona);
            cmd.Parameters.AddWithValue("@codigocatastral", codigocatastral);
            cmd.Parameters.AddWithValue("@direccion", direccion);
            cmd.Parameters.AddWithValue("@superficie", superficie);
            cmd.Parameters.AddWithValue("@distrito", distrito);
            cmd.Parameters.AddWithValue("@userid", this.userId);
            cmd.CommandType = CommandType.Text;
            con.Open();
            try
            {
                cmd.ExecuteNonQuery();
                MessageBox.Show("Registro insertado exitosamente.");
                admin adminForm = new admin();
                adminForm.Show();
                this.Close();
                
            }
            catch (Exception ex)
            {
                MessageBox.Show("Error al insertar el registro: " + ex.Message);
            }

            
        }
    }
}
